@extends('layouts.admin')

@section('content')



<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>


<div class="col-lg-12">
    <h4 class="header-title">Cocktails</h4>
    <p class="sub-header">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
    </p>

    <div class="table-responsive">
        <table id="table" class="table table-hover mb-0">
            <thead>
            <tr>
                <th>Order</th>
                <th>Category</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody id="tablecontents">
            @foreach ($cocktails as $cocktail)
            <tr class="row1" data-id="{{$cocktail->id}}">
                <th scope="row">{{ $cocktail->sort_id }}</th>
                <td>{{ $cocktail->cocktail_category }}</td>
                <td>{{ $cocktail->name }}</td>
                <td>{{ $cocktail->desc }}</td>
                <td>{{ $cocktail->price }}</td>
                <td><a href="{{ route('cocktails.edit', $cocktail->id)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{ route('cocktails.destroy', $cocktail->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

<script type="text/javascript">
  $(function () {
    // $("#table").DataTable();

    $( "#tablecontents" ).sortable({
      items: "tr",
      cursor: 'move',
      opacity: 0.6,
      update: function() {
          sendsort_idToServer();
      }
    });

    function sendsort_idToServer() {
      // success notification
      // Shorthand for:
      // alertify.notify( message, 'success', [wait, callback]);
      alertify.success('Menu Updated');

      var sort_id = [];
      var token = $('meta[name="csrf-token"]').attr('content');
      $('tr.row1').each(function(index,element) {

        sort_id.push({
          id: $(this).attr('data-id'),
          position: index+1
        });
      });

      $.ajax({
        type: "POST",
        dataType: "json",
        url: "{{ url('/admin/cocktails-order') }}",
        data: {
          sort_id: sort_id,
          _token: token
        },
        success: function(response) {

          if (response.status == "success") {
            console.log(response);
            $('.toast').toast('hide')
          } else {
            console.log(response);
          }
        }


      });
    }
  });
</script>


@endsection
