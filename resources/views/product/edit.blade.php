<x-app-layout>

<form class="mx-auto w-3/4 my-5" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
<h1 class="text-xl p-5">Edit Product</h1>
@csrf
@method('PUT')
<input value="{{$product->name}}" class="block mb-5 w-full p-3 border-2 border-slate-200" type="text" name="pname" id="" placeholder="Product Name">
<textarea class="block mb-5 w-full p-3 border-2 border-slate-200" name="pdescription" id="" rows=5 placeholder="Description">{{$product->description}}</textarea>
<input value="{{$product->price}}" class="block mb-5 w-full p-3 border-2 border-slate-200" type="number" name="pprice" id="" placeholder="Price">
<input value="{{$product->stock}}" class="block mb-5 w-full p-3 border-2 border-slate-200" type="number" name="pstock" placeholder="Stock" id="">
<img src="{{url('storage/'.$product->photo)}}" class="h-16" alt="">
<input class="block mb-5 w-full p-3 border-2 border-slate-200" type="file" name="pphoto" id="">

<input class="py-2 px-6 bg-blue-600 text-white rounded-full" type="submit" value="Update Product">

</form>


</x-app-layout>