<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
<div class="msb" id="msb">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<div class="brand-wrapper">
					<!-- Brand -->
					<div class="brand-name-wrapper">
						<a class="navbar-brand" href="#">
							DashBoard
						</a>
					</div>

				</div>

			</div>
</div>
<div class="mcw">
  <div class="cv">
    <div>
     <div class="inbox">
       <div class="inbox-sb">
         
       </div>
       <div class="inbox-bx container-fluid">
         <div class="row">
           <div class="col-md-2">
             <ul>
               <li><a href="#">Inbox</a></li>
               <li><a href="#">Sent</a></li>
               <li><a href="compose-mail">Compose </a></li>
             </ul>
           </div>
           <div class="col-md-10">
             <table class="table table-stripped">
                 <thead>
                     <th>Subjcet</th>
                     <th>Mail Body</th>
                     <td>Attachment</td>
                     </thead>
               <tbody>
                   @if(!empty($mails))
                   @foreach($mails as $mail)
                 <tr>
                   <td>{{$mail->subject}}</td>
                   <td>{{$mail->mailBody}}</td>
                   <td>{{$mail->attachment}}</td>
                 </tr>
                 @endforeach
                </tbody>
                @endif
             </table>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
</div>
</body>
</html>

