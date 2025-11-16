@foreach ($customers as $customer)
    <div class="d-flex align-items-center flex-wrap w-100 gap-4 gap-sm-0 text-bg-dark px-4 py-3 rounded">
        <div class="col-auto">
            @if ($customer->income > 2500)
                <i class="bi bi-arrow-up fs-1"></i>
            @elseif($customer->income > 980 and $customer->income <= 2500)
                <i class="bi bi-dash-lg fs-1"></i>
            @else
                <i class="bi bi-arrow-down fs-1"></i>
            @endif
        </div>
        <div class="col-12 col-sm-6 col-md-7 col-lg-9 mx-3">
            <h6 class="mb-0">
                {{ $customer->name }}
                <span
                    class="my-badge {{ $customer->income <= 980 ? 'badge-red' : ($customer->income <= 2500 ? 'badge-yellow' : 'badge-green') }}">
                    R$ {{ number_format($customer->income, 0, ',', '.') }}
                </span>
            </h6>
        </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-end gap-4">
            <a href="/customers/{{ $customer->id }}/edit">
                <i class="fs-4 bi bi-pencil text-warning cursor-pointer" title="Edit"></i>
            </a>
            <form action="/customer/delete/{{ $customer->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn p-0">
                    <i class="fs-4 bi bi-calendar-x text-danger cursor-pointer customer-delete" title="Delete"></i>
                </button>
            </form>
        </div>
    </div>
@endforeach
