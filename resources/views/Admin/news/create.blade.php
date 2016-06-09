@extends('template.Partials.divAdmin')

@section('title', 'Ingresar Noticia -')

@section('content')
    <div class="content-wrapper">
        <div class="content-heading">Nueva Noticia</div>
        <div class="row">
            <!-- Article Content-->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="post" action="{{ route('Admin.news.store') }}"  enctype="multipart/form-data">
                            <input type="text" name="title" placeholder="Título de la Noticia" class="mb-lg form-control input-lg">
                            <!-- Wysiswyg tooblbar-->
                            <div data-role="editor-toolbar" data-target="#editor" class="btn-toolbar btn-editor">
                                  <div class="btn-group dropdown">
                                      <a data-toggle="dropdown" title="Letra" class="btn btn-default">
                                          <em class="fa fa-font"></em><b class="caret"></b>
                                      </a>
                                      <ul class="dropdown-menu">
                                          <li><a href="#" data-edit="fontName Arial" style="font-family:'Arial'">Arial</a>
                                          </li>
                                          <li><a href="#" data-edit="fontName Sans" style="font-family:'Sans'">Sans</a>
                                          </li>
                                          <li><a href="#" data-edit="fontName Serif" style="font-family:'Serif'">Serif</a>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="btn-group dropdown">
                                      <a data-toggle="dropdown" title="Tamaño" class="btn btn-default">
                                          <em class="fa fa-text-height"></em>&nbsp;<b class="caret"></b>
                                      </a>
                                      <ul class="dropdown-menu">
                                          <li><a href="#" data-edit="fontSize 5" style="font-size:24px">Grande</a>
                                          </li>
                                          <li><a href="#" data-edit="fontSize 3" style="font-size:18px">Normal</a>
                                          </li>
                                          <li><a href="#" data-edit="fontSize 1" style="font-size:14px">Pequeño</a>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="btn-group">
                                      <a data-edit="bold" data-toggle="tooltip" title="Negrita (Ctrl/Cmd+B)" class="btn btn-default">
                                          <em class="fa fa-bold"></em>
                                      </a>
                                      <a data-edit="italic" data-toggle="tooltip" title="Cursiva (Ctrl/Cmd+I)" class="btn btn-default">
                                          <em class="fa fa-italic"></em>
                                      </a>
                                      <a data-edit="strikethrough" data-toggle="tooltip" title="Tachado" class="btn btn-default">
                                          <em class="fa fa-strikethrough"></em>
                                      </a>
                                      <a data-edit="underline" data-toggle="tooltip" title="Subrayado (Ctrl/Cmd+U)" class="btn btn-default">
                                          <em class="fa fa-underline"></em>
                                      </a>
                                  </div>
                                  <div class="btn-group">
                                      <a data-edit="insertunorderedlist" data-toggle="tooltip" title="Viñetas" class="btn btn-default">
                                          <em class="fa fa-list-ul"></em>
                                      </a>
                                      <a data-edit="insertorderedlist" data-toggle="tooltip" title="Numeración" class="btn btn-default">
                                          <em class="fa fa-list-ol"></em>
                                      </a>
                                      <a data-edit="outdent" data-toggle="tooltip" title="Reducir Sangría (Shift+Tab)" class="btn btn-default">
                                          <em class="fa fa-dedent"></em>
                                      </a>
                                      <a data-edit="indent" data-toggle="tooltip" title="Aumentar Sangría (Tab)" class="btn btn-default">
                                          <em class="fa fa-indent"></em>
                                      </a>
                                  </div>
                                  <div class="btn-group">
                                      <a data-edit="justifyleft" data-toggle="tooltip" title="Alinear a la Izquierda (Ctrl/Cmd+L)" class="btn btn-default">
                                          <em class="fa fa-align-left"></em>
                                      </a>
                                      <a data-edit="justifycenter" data-toggle="tooltip" title="Centrado (Ctrl/Cmd+E)" class="btn btn-default">
                                          <em class="fa fa-align-center"></em>
                                      </a>
                                      <a data-edit="justifyright" data-toggle="tooltip" title="Alinear a la Derecha (Ctrl/Cmd+R)" class="btn btn-default">
                                          <em class="fa fa-align-right"></em>
                                      </a>
                                      <a data-edit="justifyfull" data-toggle="tooltip" title="Justificado (Ctrl/Cmd+J)" class="btn btn-default">
                                          <em class="fa fa-align-justify"></em>
                                      </a>
                                  </div>
                                  <div class="btn-group dropdown">
                                      <a data-toggle="dropdown" title="Hiperenlace" class="btn btn-default">
                                          <em class="fa fa-link"></em>
                                      </a>
                                      <div class="dropdown-menu">
                                          <div class="input-group ml-xs mr-xs">
                                              <input id="LinkInput" placeholder="URL" type="text" data-edit="createLink" class="form-control input-sm">
                                              <div class="input-group-btn">
                                                  <button type="button" class="btn btn-sm btn-default">Agregar</button>
                                              </div>
                                          </div>
                                      </div>
                                      <a data-edit="unlink" data-toggle="tooltip" title="Remove Hyperlink" class="btn btn-default">
                                          <em class="fa fa-cut"></em>
                                      </a>
                                  </div>
                                  <div class="btn-group">
                                      <a id="pictureBtn" data-toggle="tooltip" title="Inserte una Imagen (o arrastre &amp; suelte)" class="btn btn-default">
                                          <em class="fa fa-picture-o"></em>
                                      </a>
                                      <input type="file" name="img" data-edit="insertImage" style="position:absolute; opacity:0; width:41px; height:34px">
                                  </div>
                                  <div class="btn-group pull-right">
                                      <a data-edit="undo" data-toggle="tooltip" title="Deshacer (Ctrl/Cmd+Z)" class="btn btn-default">
                                          <em class="fa fa-undo"></em>
                                      </a>
                                      <a data-edit="redo" data-toggle="tooltip" title="ReHacer (Ctrl/Cmd+Y)" class="btn btn-default">
                                          <em class="fa fa-repeat"></em>
                                      </a>
                                  </div>
                              </div>
                              <!-- Wysiswyg Editor-->
                              <div style="overflow:scroll; height:300px;max-height:300px" class="form-control wysiwyg mt-lg" contenteditable="true">Escribe Algo..</div>
                                <textarea name="boddy" hidden></textarea>
                              --}}
                            <div class="clearfix">
                                <div class="pull-left">
                                    <button type="submit" class="btn btn-primary m-t-10">
                                        <em class="fa fa-check fa-fw"></em>Guardar</button>
                                </div>
                                <div class="pull-right">
                                    <button type="button" class="btn btn-danger m-r-10 m-t-10">
                                        <em class="fa fa-trash fa-fw"></em>Remove</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection