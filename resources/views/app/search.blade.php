<form action="{{'search'}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="request">
    <input type="submit" name="button">
</form>