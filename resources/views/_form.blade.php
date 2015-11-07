        <form action="/{{$action}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            
            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Заголовок</label>

                <div class="col-sm-6">
                    <input type="text" name="title" value="{{ (isset($post))? $post->title : '' }}" id="title" class="form-control">
                    <?php echo $errors->first('title', '<p>:message</p>');?>
                </div>
            </div>
            
            <div class="form-group">
                <label for="author" class="col-sm-3 control-label">Автор</label>

                <div class="col-sm-6">
                    <input type="text" name="author" value="{{ (isset($post))? $post->author : '' }}" id="author" class="form-control">
                    <?php echo $errors->first('author', '<p>:message</p>');?>
                </div>
            </div>
            
            <div class="form-group">
                <label for="content" class="col-sm-3 control-label">Статья</label>

                <div class="col-sm-6">
                    <textarea rows="6" name="content" id="content" class="form-control">{{ (isset($post))? $post->content : '' }}</textarea>
                    <?php echo $errors->first('content', '<p>:message</p>');?>
                </div>
            </div>
            
            

            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit"  class="btn btn-default">
                        <i class="fa fa-plus"></i> Сохранить
                    </button>
                </div>
            </div>
        </form>
<?php /*dd($errors);*/?>