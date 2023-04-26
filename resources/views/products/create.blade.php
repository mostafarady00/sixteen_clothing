<form action="{{ route('product.created') }}"  method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="img" />
    <input type="text" name="title" placeholder="title">
    <input type="text" name="price" placeholder="title">
    <input type="text" name="sub_title" placeholder="title">
    <button type="submit"> Create Product </button>
</form>
