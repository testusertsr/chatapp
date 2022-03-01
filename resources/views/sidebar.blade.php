<div class="rightbar d-none d-md-block">
    <div class="nav flex-column nav-pills border-start py-xl-4 py-3 h-100">
        <a class="nav-link mb-2 text-center rightbar-link" data-toggle="pill" href="#tab-calendar"><i class="fas fa-calendar"></i></a>
        <a class="nav-link mb-2 text-center rightbar-link" data-toggle="pill" href="#tab-note"><i class="fas fa-quote-right"></i></a>
    </div>
    <div class="tab-content py-xl-4 py-3 px-xl-4 px-3">
        <div class="tab-pane fade" id="tab-calendar" role="tabpanel">
            <div class="header border-bottom pb-4 d-flex justify-content-between">
                <div>
                    <h6 class="mb-0 font-weight-bold">Calendar</h6>
                </div>
            <div>
            <button class="btn btn-link close-sidebar text-muted" type="button"><i class="fas fa-times fa-lg"></i></button>
        </div>
    </div>

    <div class="body mt-4">
        <div id="mini-calendar"></div>
    </div>
</div>    

<div class="tab-pane fade" id="tab-note" role="tabpanel">
    <div class="header border-bottom pb-4 d-flex justify-content-between">
        <div>
            <h6 class="mb-0 font-weight-bold">My Notes</h6>
        </div>
    <div>
    <button class="btn btn-link close-sidebar text-muted" type="button"><i class="fas fa-times fa-lg"></i></button>
    </div>
</div>

<div class="body mt-4">
    <div class="add-note">
        <form method="post" action="addnote">
            @csrf
            <div class="input-group mb-2">
                <textarea rows="3" class="form-control" name="note" placeholder="Enter a note here.."></textarea>
            </div>
            <button type="submit" class="btn btn-primary addnote">Add</button>
        </form>

        <ul class="list-unstyled mt-4">
            @foreach ($notes as $item)
            <li class="card border-0 mb-2">
                <span>{{ $item->notes }}</span>
                <form action="deletenote" method="post">
                    @csrf 
                    <button class="btn btn-sm btn-link" name ="delete" onclick="return confirm('Are you sure want to delete?');" value="{{ $item->id }}"><i class="zmdi zmdi-delete text-danger"></i></button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
    </div>
</div>
</div>
</div>