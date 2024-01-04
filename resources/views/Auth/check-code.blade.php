<form action="{{ route('checkCode') }}" method="POST">
    @csrf
    <input type="text" name="code" placeholder="Enter send code">
    <button type="submit">save</button>
</form>