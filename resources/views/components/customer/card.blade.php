@foreach ($customers as $customer)
    <div class="row align-items-center text-bg-dark p-3 rounded">
        <div class="col-auto">
            <i class="bi bi-calendar-check fs-1"></i>
        </div>
        <div class="col-10 border-end">
            <h6>
                {{ $customer->name }}
            </h6>
        </div>
        <div class="d-flex col-auto gap-4 ps-5">
            <i class="fs-4 bi bi-pencil text-warning cursor-pointer" title="Edit"></i>
            <i class="fs-4 bi bi-calendar-x text-danger cursor-pointer" title="Cancel"></i>
        </div>
    </div>
@endforeach
