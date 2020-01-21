<div class="well">
    <h4>Blog Search</h4>
    <div class="input-group">
        <input type="text" class="form-control">
        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
    </div>

    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row-flex">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    @if($categories)
                        @foreach($categories as $category)
                          <li><a href="#">{{$category->name}}</a>
                        @endforeach
                        @endif
                    </li>
                </ul>
            </div>
            <!-- /.col-lg-6 -->

            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->

</div>
