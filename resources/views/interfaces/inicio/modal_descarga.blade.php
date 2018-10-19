<div class="modal-header">
  <h6 class="modal-title pull-left">CENTRO DE DESCARGA</h6>
  <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
	<div class="row contenido" id='sit-trafico'>
	    <div class="section-head col-sm-12" style="margin-bottom: 25px !important;">
	        <h4 style="font-size: 22px;">
	            <span>{{$categoria->nombre}}</span><br>
	            {{$subcategoria->nombre}}
	        </h4>
	    </div>
	    <div class="content col-sm-12">
	        <ul class="list-group list-group-flush">
	        	@foreach($files as $file)
	            <a href="manuales/{{$categoria->carpeta}}/{{$subcategoria->subcarpeta}}/{{$file->archivo}}" download="{{$file->archivo}}" class="list-group-item list-group-item-action">
	            	{{$file->nombre}}
	            	<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
	        	</a>
				@endforeach
	        </ul>
	    </div>                    
	</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
</div>