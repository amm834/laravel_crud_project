@foreach($products as $product)
{{$product->title}}
{{$product->price}}
{{$product->imgs}}
{{$product->description}}
@endforeach