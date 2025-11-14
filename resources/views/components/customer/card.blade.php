@foreach ($customers as $customer)
    <div class="row align-items-center text-bg-dark p-3 rounded">
        <div class="col-auto">
            @if ($customer->income > 2500)
                <i class="bi bi-arrow-up fs-1"></i>
            @elseif($customer->income > 980 and $customer->income <= 2500)
                <i class="bi bi-dash-lg fs-1"></i>
            @else
                <i class="bi bi-arrow-down fs-1"></i>
            @endif
        </div>
        <div class="col-10 border-end">
            <h6 class="mb-0">
                {{ $customer->name }}
                @if ($customer->income <= 980)
                    <span class="badge rounded-pill text-bg-danger">
                        {{ $customer->income }}
                    </span>
                @elseif($customer->income > 980 and $customer->income <= 2500)
                    <span class="badge rounded-pill text-bg-warning">
                        {{ $customer->income }}
                    </span>
                @else
                    <span class="badge rounded-pill text-bg-success">
                        {{ $customer->income }}
                    </span>
                @endif
            </h6>
        </div>
        <div class="d-flex col-auto gap-4 ps-5">
            <i class="fs-4 bi bi-pencil text-warning cursor-pointer" title="Edit"></i>
            <form action="/customer/delete/{{ $customer->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">
                    <i class="fs-4 bi bi-calendar-x text-danger cursor-pointer customer-delete" title="Delete"></i>
                </button>
            </form>
        </div>
    </div>
@endforeach
