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
    <h4 class="header-title">desserts</h4>

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
            @foreach ($desserts as $dessert)
            <tr class="row1" data-id="{{$dessert->id}}">
                <th scope="row">{{ $dessert->sort_id }}</th>
                <td>{{ $dessert->category }}</td>
                <td>{{ $dessert->name }}</td>
                <td>{{ $dessert->desc }}</td>
                <td>{{ $dessert->price }}</td>
                <td><a href="{{ route('desserts.edit', $dessert->id)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{ route('desserts.destroy', $dessert->id)}}" method="post">
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
      alertify.success('Desserts Successfully Updated');

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
        url: "{{ url('/admin/desserts-order') }}",
        data: {
          _method: 'POST',
          sort_id: sort_id,
          _token: token
        },
        success: function(response) {

          if (response.status == "success") {
            console.log(response);
          } else {
            console.log(response);
          }
        },
        error:function(response){
          console.log("failed:", response);
        },
      });
    }

  });
</script>


@endsection
