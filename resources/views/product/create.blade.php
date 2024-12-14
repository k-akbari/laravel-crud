<x-app-layout>

<form class="mx-auto w-96" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
<h1 class="text-xl p-5">Create Product</h1>
@csrf
@method('POST')
<input class="block mb-5 w-full p-3 border-2 border-slate-200" type="text" name="pname" id="" placeholder="Product Name">
<textarea class="block mb-5 w-full p-3 border-2 border-slate-200" name="pdescription" id="" rows=5 placeholder="Description"></textarea>
<input class="block mb-5 w-full p-3 border-2 border-slate-200" type="number" name="pprice" id="" placeholder="Price">
<input class="block mb-5 w-full p-3 border-2 border-slate-200" type="number" name="pstock" placeholder="Stock" id="">
<input class="block mb-5 w-full p-3 border-2 border-slate-200" type="file" name="pphoto" id="">

<input class="py-2 px-6 bg-blue-600 text-white rounded-full" type="submit" value="Save Product">

</form>

</x-app-layout>


