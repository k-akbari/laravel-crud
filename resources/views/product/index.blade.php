<x-app-layout>

<x-slot name='header'>
    <h2 class="font-bold inline-block">Product</h2>
    <a href="{{route('product.create')}}" class="float-right bg-sky-500 text-sky-100 inline-block px-2 py-1">Add new product</a>
</x-slot>

<table class='mx-auto my-3'>
<tr>
    <th class="p-5 border-2 border-slate-400">ID</th>
    <th class="p-5 border-2 border-slate-400">{{__('Photo')}}</th>
    <th class="p-5 border-2 border-slate-400">{{__('Name')}}</th>
    <th class="p-5 border-2 border-slate-400">{{__('Description')}}</th>
    <th class="p-5 border-2 border-slate-400">{{__('Price')}}</th>
    <th class="p-5 border-2 border-slate-400">{{__('Stock')}}</th>
    <th class="p-5 border-2 border-slate-400">{{__('Action')}}</th>
</tr>
@foreach($products as $p)
<tr>
    <td class="p-1 border-2 border-slate-400">{{$p->id}}</td>
    <td class="p-1 border-2 border-slate-400"><img src="{{url('storage/'.$p->photo)}}" class='h-10' alt=""></td>
    <td class="p-1 border-2 border-slate-400">{{$p->name}}</td>
    <td class="p-1 border-2 border-slate-400">{{$p->description}}</td>
    <td class="p-1 border-2 border-slate-400">{{$p->price}}</td>
    <td class="p-1 border-2 border-slate-400">{{$p->stock}}</td>
    <td class="p-1 border-2 border-slate-400">
        <a href="{{route('product.edit',$p->id)}}" class="px-4 py-1 bg-sky-400 text-white rounded-sm inline-block">{{__('Edit')}}</a>
        <form class="inline-block" action="{{route('product.destroy',$p->id)}}" method="post" onsubmit="return confirm('Are you sure to delete?')">
            @csrf
            @method('DELETE')
            <input class="bg-red-500 text-red-100 px-2 py-1 my-1 rounded" type="submit" value="{{__('Delete')}}">
        </form>
    </td>
</tr>
@endforeach
</table>


</x-app-layout>

