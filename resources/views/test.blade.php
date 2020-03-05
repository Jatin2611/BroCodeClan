@extends('layouts.dashnav')
@section('content')
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Forms</title>
<script src="/js/fv.js">

</script>
<link rel="stylesheet" type='text/css' href="style.css">
</head>
<body >

   <div class="container"><!--change1 container-->
<br><br>
    
<br>
    <div class="container">

        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-lg-6 mb-5">
                <div class="card rounded" id="login">
                    <div class="card-header" >
                        <h3 class=" text-uppercase mb-0" align="center"><b>Questionnaire</b></h3>
                    </div>
                    <div class="card-body">
                    <form name="myForm" action="{{url('/test')}}" method="post"  onSubmit= "return validate()" >
                        <div class="form-group">
                          <b>Can you?</b><br><br>
                          <!-- <label >fix electrical things</label>
                          <input type="checkbox" id="can1" class="form-control rounded" style="width:100%" autofocus size="25"> -->
                            <label class="form-control rounded">
                              <input type="checkbox" value="1"> Fix Electrical Things
                            </label>
                            <label class="form-control rounded">
                              <input type="checkbox" value="2"> Think abstractly
                            </label>
                            <label class="form-control rounded">
                              <input type="checkbox" value="3"> sketch,draw,paint
                            </label>
                            <label class="form-control rounded">
                              <input type="checkbox" value="4"> Teach/Train others
                            </label>
                            <label class="form-control rounded">
                              <input type="checkbox" value="5"> initiate projects
                            </label>
                            <label class="form-control rounded">
                              <input type="checkbox" value="6"> keep accurate records
                            </label>
                        </div>
                        <div>

                        </div>
                        <BR><BR> <!-- <input type="submit" value="Next"> -->
                         <div class="form-group" align="center">
                                <button type="submit" class="btn btn-dark">Next</button>
                         </div>
                      </div>
                    </form>
<!--a href='form2.html'><button class="btn btn-dark" align="center">Next</button></a-->


</body>
</html>

@endsection