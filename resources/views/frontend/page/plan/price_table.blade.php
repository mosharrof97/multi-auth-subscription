<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
    <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
</div>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    @foreach ($plans as $data )
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">{{ $data->name }}</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">{{ $data->price }}<small class="text-body-secondary fw-light">/{{ $data->duration_in_days }} days</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <a href="{{ route('applySubscription', $data->id) }}" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</a>
          </div>
        </div>
    </div>
    @endforeach
</div>