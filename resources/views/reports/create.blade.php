<hl>New Report Form</hl>
<form action="/reports" method="POST"
    @@csrf
    Title: ,Input type="text" placeholder="please insert title" name="title"><br>
    @if($errors->has('title'))<span>{{$errors->first('title')}}'</span>
    @endif 
    </br>
    Desc: <textarea nmae="description"></textarea><br>
    @if($errors->has('description'))<span>{{$errors->first('description')}}'</span>
    @endif 
    </br>
    Priority: <select name="priority">
        <option value='1'>1</option>
        <option value='2'>1</option>
        <option value='3'>1</option>
    </select><br>
    <input type="submit" value="simpan"/>
</form>