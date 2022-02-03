<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Models\Product as ProductModel;

class Product extends Component
{
    public $products, $name, $price, $product_id;
    protected $rules;
    public function render()
    {
        $this->products = ProductModel::all();
        return view('livewire.products.product')->layout('templates.default');
    }

    public function hydrate()
    {
        $this->rules = [

            'name' => ['required',Rule::unique('products')->ignore($this->product_id)],
            'price' => 'required|numeric',
        ];
    }
 

    public function store()
    { 
        $validatedDate = $this->validate();
        $this->product_id ?
        $product = ProductModel::findorFail($this->product_id)
        :
        $product = new ProductModel();
        $product->updateOrCreate($validatedDate);
        $this->product_id ?
        session()->flash('message', 'product Updated Successfully.') :
        session()->flash('message', 'product Created Successfully.');
        $this->reset();
        $this->emit('productStore');

    }

    public function edit($id)
    {
        $this->reset();
        $product = ProductModel::findorFail($id);
        $this->product_id = $id;
        $this->name = $product->name;
        $this->price = $product->price;        
    }

    public function cancel()
    {
        $this->reset();
    }

    public function delete($id)
    {
        if($id){
            ProductModel::where('id',$id)->delete();
            session()->flash('message', 'Product Deleted Successfully.');
        }
    }
}
