<h1>index-you</h1>
<h2>this is about you</h2>

<form action="{{ url('user' , $id) }}" method="post">
    @csrf
    @method('DELETE')
    <div class="form-group">
            <botton class="bton
            