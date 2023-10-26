<div class="d-flex align-item-center">
    @can($editPermission)
        <a href="{{ $editLink }}" class="editbtn">
            <i class="bx bx-edit text-warning"></i>
        </a>
    @endcan
    @can($deletePermission)
        <form method="POST" action="{{ $deleteLink }}">
            @csrf
            @method('delete')
            <a href="#" onclick="event.preventDefault();
                    this.closest('form').submit();">
                <i class="bx bx-trash text-danger"></i>
            </a>
        </form>
    @endcan
</div>
