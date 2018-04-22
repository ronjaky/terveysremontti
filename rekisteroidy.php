<!doctype html>
<html lang=fi>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="css/terveysremontti.css" rel="stylesheet" type="text/css">
    <link href="css/kirjautuminen.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
</head>
<body>

<nav id="topnav" class="navbar topnav fixed-top justify-content-center bg-light">
	<ul class="nav">
		<li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-angle-left"></i> Takaisin etusivulle</a></li>
	</ul>
</nav>

<div class="container">
	<div class="row"><div class="col"><h1>Rekisteröidy</h1></div></div>
	<div class="row">

		<div class="col-md-2"></div>
		<div class="col-md-8">

		<form class="needs-validation" novalidate>
			<h2>Perustiedot</h2>

			<div class="row">
				<div class="form-group col-xs-6 col-sm-4 col-md-5">
				    <label for="InputFName">Etunimi</label>
				    <input type="text" class="form-control" id="InputFName" placeholder="Etunimi" required>
				    <div class="invalid-feedback">Syötä etunimi.</div>
				</div>
				<div class="form-group col-xs-6 col-sm-4 col-md-5">
				    <label for="InputSName">Sukunimi</label>
				    <input type="text" class="form-control" id="InputSName" placeholder="Sukunimi" required>
				    <div class="invalid-feedback">Syötä sukunimi.</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6 col-md-6">
				    <label for="InputEmail">Sähköposti</label>
				    <input type="email" class="form-control" id="InputEmail" placeholder="Sähköposti" required>
				    <div class="invalid-feedback">Syötä toimiva sähköpostiosoite.</div>
				</div>
				<div class="form-group col-sm-6 col-md-6">
				    <label for="InputPhone">Puhelin</label>
				    <input type="tel" class="form-control" id="InputPhone" placeholder="Puhelin">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6 col-md-6">
				    <label for="InputAddress">Katuosoite</label>
				    <input type="text" class="form-control" id="InputAddress" placeholder="Katuosoite">
				</div>
				<div class="form-group col-xs-6 col-sm-3 col-md-3">
				    <label for="InputZip">Postinumero</label>
				    <input type="number" class="form-control" id="InputZip" placeholder="Postinumero">
				</div>
				<div class="form-group col-xs-6 col-sm-3 col-md-3">
				    <label for="InputCity">Postitoimipaikka</label>
				    <input type="text" class="form-control" id="InputCity" placeholder="Postitoimipaikka">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6 col-md-6"><br>
				    <label for="InputPW">Salasana</label>
				    <input type="password" class="form-control" id="InputPW" placeholder="" required>
				    <div class="invalid-feedback">Syötä salasana.</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6 col-md-6">
				    <label for="InputPW2">Syötä salasana uudelleen</label>
				    <input type="password" class="form-control" id="InputPW2" placeholder="" required>
				    <div class="invalid-feedback">Syötä salasana uudelleen.</div>
				</div>
			</div>

			<h2>Terveys</h2>

			<div class="row">
				<div class="form-group col-xs-4 col-sm-4 col-md-3">
					<label for="exampleInputEmail1">Sukupuoli</label>
				    <select class="form-control" required>
						<option>Mies</option>
						<option>Muu</option>
						<option>Nainen</option>
					</select>
					<div class="invalid-feedback">Please choose a username.</div>
				</div>
				<div class="form-group col-xs-4 col-sm-4 col-md-3">
				    <label for="exampleInputEmail1">Pituus</label>
				    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="cm">
				</div>
				<div class="form-group col-xs-4 col-sm-4 col-md-3">
				    <label for="exampleInputPassword1">Paino</label>
				    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="kg">
				</div>
			</div>

			<h3>Terveydentila</h3>

			<div class="checkbox sairaus">
				<label>
				    <input type="checkbox" value="">
				    Raskaus 
				</label>
				<label>
				    <input type="checkbox" value="">
				    Sydän- ja verisuonisairaus
				</label>
				<label>
				    <input type="checkbox" value="">
				    Tyypin 1 diabetes
				</label>
				<label>
				    <input type="checkbox" value="">
				    Tyypin 2 diabetes
				</label>
				<label>
				    <input type="checkbox" value="">
				    Verenpaine
				</label>
			</div>

			<label for="exampleInputPassword1">Muu, mikä?</label>
			<textarea class="form-control" rows="3"></textarea>

			<h2>Ruokavalio</h2>

			<h3>Allergiat ja erityisruokavaliot</h3>

			<div class="checkbox sairaus">
				<label>
				    <input type="checkbox" value="">
				    Kala- ja äyriäiset 
				</label>
				<label>
				    <input type="checkbox" value="">
				    Keliakia
				</label>
				<label>
				    <input type="checkbox" value="">
				    Laktoosi-intoleranssi
				</label>
				<label>
				    <input type="checkbox" value="">
				    Lakto-ovo-vegetaarinen
				</label>
				<label>
				    <input type="checkbox" value="">
				    Maito
				</label>
				<label>
				    <input type="checkbox" value="">
				    Pähkinä
				</label>
				<label>
				    <input type="checkbox" value="">
				    Vegaani
				</label>
			</div>

			<label for="exampleInputPassword1">Muu, mikä?</label>
			<textarea class="form-control" rows="3"></textarea>

			<h3>Inhokit</h3>

			<label for="exampleInputPassword1">Ruuat ja ruoka-aineet, joista et pidä</label>
			<textarea class="form-control" rows="3"></textarea>

			<br>

			<div class="form-group">
      			<div class="form-check">
      				<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      				<label class="form-check-label" for="invalidCheck">Ymmärrän tämän olevan sitova ilmoittautuminen ja olen valmis sitoutumaan 3kk:ksi.</label>
      			</div>
      			<div class="form-check">
      				<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      				<label class="form-check-label" for="invalidCheck">Hyväksyn <a data-toggle="modal" data-target=".ehdot" href="#">käyttöehdot</a>.</label>
      				<div class="invalid-feedback">Sinun pitää hyväksyä käyttöehdot voidaksesi rekisteröityä.</div>
      			</div>
  			</div>
  			<div class="form-group text-center">
      			<button type="submit" class="btn btn-light">Rekisteröidy</button>
  			</div>
		</form>

		</div>

	</div>
</div>

<div class="modal fade ehdot" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Käyttöehdot</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
        		</button>
        	</div>
        	<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet lacus in sem commodo, quis suscipit orci volutpat. Suspendisse potenti. Nulla accumsan lacus purus, ac luctus eros finibus at. Proin in eros ac eros faucibus pellentesque. Maecenas suscipit lacus vel nisl pharetra gravida. Proin imperdiet enim id scelerisque accumsan. Proin ac massa quis nisi semper efficitur sit amet eu metus.</p>

				<p>Nulla tempor sem vel enim laoreet sodales. Duis imperdiet velit lacus, in pretium urna aliquam quis. Mauris maximus porttitor feugiat. Nunc mattis arcu velit, ut elementum tellus facilisis congue. Proin vulputate magna et lectus aliquet varius. Suspendisse potenti. Sed vulputate orci id neque iaculis, vel ornare orci feugiat. Phasellus iaculis vehicula sagittis. Pellentesque ac mi id augue imperdiet aliquam ac vel diam. Mauris convallis lacus eget luctus tempus.</p>

				<p>Nam euismod, nunc vel interdum lobortis, orci arcu convallis neque, iaculis gravida lectus nibh sed metus. Proin elementum, arcu id congue tempus, tellus nisl aliquet neque, sed aliquet lorem arcu a est. Morbi nec nunc nec diam consequat porttitor. Aliquam a efficitur eros. Morbi vulputate, purus ut luctus pellentesque, lorem eros dignissim sapien, eu ornare enim nunc vel diam. Nullam porta pharetra metus in convallis. Etiam bibendum rhoncus tincidunt. In hac habitasse platea dictumst. Duis eget pellentesque dui.</p>

				<p>Curabitur aliquet, turpis sed aliquet convallis, tortor velit congue nunc, sit amet molestie erat ante tempor ligula. Fusce ornare quam eget ante feugiat, a aliquet erat eleifend. Aenean sit amet turpis consectetur mauris semper elementum. Proin viverra interdum magna, eget viverra purus molestie ut. Sed suscipit ornare neque ac auctor. Cras condimentum est ut lectus tincidunt, nec sodales diam auctor. Nullam gravida ligula erat, vitae congue mi suscipit laoreet. Fusce egestas quis dolor quis posuere. Cras vel nunc nibh. Ut pellentesque ex a congue ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus volutpat nec lacus et ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam id tempus leo, in laoreet enim.</p>

				<p>Suspendisse tortor dolor, elementum sit amet porta ut, condimentum condimentum enim. Sed congue porttitor sem vehicula finibus. Nam eu nisi ac libero ullamcorper elementum. Phasellus tristique turpis id iaculis suscipit. Fusce tincidunt lacus et est semper molestie. Cras auctor tortor odio, vitae suscipit purus pulvinar quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean mollis commodo felis ac malesuada. Mauris ultrices sed libero in blandit. Nunc id tempor nisi. Sed vel mi id turpis tempor pulvinar. Nunc iaculis consequat velit, quis ornare leo molestie in.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Sulje</button>
        	</div>
		</div>
	</div>
</div>

<footer class="container text-center"></footer>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>