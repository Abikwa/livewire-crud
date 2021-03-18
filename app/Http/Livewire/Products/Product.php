<?php

namespace App\Http\Livewire\Products;

use App\Models\Product as ProductModel;
use Livewire\Component;

class Product extends Component
{
    public $products, $name, $price, $product_id;
    public $updateMode = false;

    public function render()
    {
        $this->products = ProductModel::all();
        return view('livewire.products.product')->layout('templates.default');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        ProductModel::create($validatedDate);

        session()->flash('message', 'product Created Successfully.');

        $this->resetInputFields();

        $this->emit('productStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $product = ProductModel::findorFail($id);
        $this->product_id = $id;
        $this->name = $product->name;
        $this->price = $product->price;
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        if ($this->product_id) {
            $product = ProductModel::find($this->product_id);
            $product->update([
                'name' => $this->name,
                'price' => $this->price,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'product Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            ProductModel::where('id',$id)->delete();
            session()->flash('message', 'Product Deleted Successfully.');
        }
    }
}
