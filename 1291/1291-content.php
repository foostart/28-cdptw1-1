<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1291">
    <div class="container">
        <div class="mail-box">
          <aside class="sm-side">
              <div class="user-head">
                  <a class="inbox-avatar" href="javascript:;">
                      <img  width="64" src="http://bootsnipp.com/img/avatars/ebeb306fd7ec11ab68cbcaa34282158bd80361a7.jpg" alt="hinh1">
                  </a>
                  <div class="user-name">
                      <h5><a href="#">Alireza Zare</a></h5>
                      <span><a href="#">Info.Ali.Pci@Gmail.com</a></span>
                  </div>
                  <a class="mail-dropdown pull-right" href="javascript:;">
                      <i class="fa fa-chevron-down"></i>
                  </a>
              </div>
              <div class="inbox-body">
                  <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                      Compose
                  </a>
                  <!-- Modal -->
                  <div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                  <h4 class="modal-title">Compose</h4>
                              </div>
                              <div class="modal-body">
                                  <form class="form-horizontal">
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">To</label>
                                          <div class="col-lg-10">
                                              <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Cc / Bcc</label>
                                          <div class="col-lg-10">
                                              <input type="text" placeholder="" id="cc" class="form-control">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Subject</label>
                                          <div class="col-lg-10">
                                              <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Message</label>
                                          <div class="col-lg-10">
                                              <textarea rows="10" cols="30" class="form-control"></textarea>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <span class="btn  fileinput-button">
                                                <i class="fa fa-plus fa "></i>
                                                <span>Attachment</span>
                                                <input type="file" name="files[]" multiple="">
                                            </span>
                                            <button class="btn btn-send" type="submit">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <ul class="inbox-nav inbox-divider">
              <li class="active">
                  <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>

              </li>
              <li>
                  <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
              </li>
              <li>
                  <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-info pull-right">30</span></a>
              </li>
              <li>
                  <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
              </li>
          </ul>
          <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
              <li> <h4>Labels</h4> </li>
              <li> <a href="#"> <i class=" fa  text-danger"></i> Work </a> </li>
              <li> <a href="#"> <i class=" fa  text-success"></i> Design </a> </li>
              <li> <a href="#"> <i class=" fa  text-info "></i> Family </a>
              </li><li> <a href="#"> <i class=" fa  text-warning "></i> Friends </a>
          </li><li> <a href="#"> <i class=" fa  text-primary "></i> Office </a>
      </li>
  </ul>
  <ul class="nav nav-pills nav-stacked labels-info ">
      <li> <h4>Buddy online</h4> </li>
      <li> <a href="#"> <i class=" fa fa-circle text-success"></i>Alireza Zare <p>I do not think</p></a>  </li>
      <li> <a href="#"> <i class=" fa fa-circle text-danger"></i>Dark Coders<p>Busy with coding</p></a> </li>
      <li> <a href="#"> <i class=" fa fa-circle text-muted "></i>Mentaalist <p>I out of control</p></a>
      </li><li> <a href="#"> <i class=" fa fa-circle text-muted "></i>H3s4m<p>I am not here</p></a>
  </li><li> <a href="#"> <i class=" fa fa-circle text-muted "></i>Dead man<p>I do not think</p></a>
</li>
</ul>

<div class="inbox-body text-center">
  <div class="btn-group">
      <a class="btn  btn-primary" href="javascript:;">
          <i class="fa fa-plus"></i>
      </a>
  </div>
  <div class="btn-group">
      <a class="btn  btn-success" href="javascript:;">
          <i class="fa fa-phone"></i>
      </a>
  </div>
  <div class="btn-group">
      <a class="btn  btn-info" href="javascript:;">
          <i class="fa fa-cog"></i>
      </a>
  </div>
</div>

</aside>
    <aside class="lg-side">
    <div class="inbox-head">
        <h3>Inbox</h3>
        <form action="#" class="pull-right position">
            <div class="">
                <input type="text" class="sr-input" placeholder="Search Mail">
                <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <div class="inbox-body">
    <div class="mail-option">
        <div class="chk-all">
            <input type="checkbox" class=" ">
            <div class="btn-group">
                <a data-toggle="dropdown" href="#" class="btn  all" aria-expanded="false">
                    All
                    <i class="fa fa-angle-down "></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"> None</a></li>
                    <li><a href="#"> Read</a></li>
                    <li><a href="#"> Unread</a></li>
                </ul>
            </div>
        </div>

        <div class="btn-group">
            <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn  ">
                <i class=" fa fa-refresh"></i>
            </a>
        </div>
        <div class="btn-group ">
            <a data-toggle="dropdown" href="#" class="btn  blue" aria-expanded="false">
                More
                <i class="fa fa-angle-down "></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <a data-toggle="dropdown" href="#" class="btn  blue">
                Move to
                <i class="fa fa-angle-down "></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
            </ul>
        </div>

        <ul class="unstyled inbox-pagination">
            <li><span>1-50 of 234</span></li>
            <li>
                <a class="np-btn" href="#"><i class="fa fa-angle-left  "></i></a>
            </li>
            <li>
                <a class="np-btn" href="#"><i class="fa fa-angle-right "></i></a>
            </li>
        </ul>
    </div>
    <table class="table table-inbox table-hover">
        <tbody>
        <tr class="unread">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td>PHPClass</td>
            <td>Added a new class: Login Class Fast Site</td>
            <td class=""><i class="fa fa-paperclip"></i></td>
            <td class="text-right">9:27 AM</td>
        </tr>
        <tr class="unread">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td >Google Webmaster </td>
            <td >Improve the search presence of WebSite</td>
            <td class=" "></td>
            <td class=" text-right">March 15</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td >JW Player</td>
            <td >Last Chance: Upgrade to Pro for </td>
            <td class=""></td>
            <td class="text-right">March 15</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td >Tim Reid, S P N</td>
            <td>Boost Your Website Traffic</td>
            <td class=""></td>
            <td class="text-right">April 01</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star inbox-started"></i></td>
            <td>Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
            <td >Stop wasting your visitors </td>
            <td class=""></td>
            <td class="text-right">May 23</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star inbox-started"></i></td>
            <td >WOW Slider </td>
            <td >New WOW Slider v7.8 - 67% off</td>
            <td class=""><i class="fa fa-paperclip"></i></td>
            <td class="text-right">March 14</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star inbox-started"></i></td>
            <td >LinkedIn Pulse</td>
            <td >The One Sign Your Co-Worker Will Stab</td>
            <td class=""><i class="fa fa-paperclip"></i></td>
            <td class="text-right">Feb 19</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td>Drupal Community<span class="label label-success pull-right">megazine</span></td>
            <td>Welcome to the Drupal Community</td>
            <td class=""></td>
            <td class="text-right">March 04</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td class="span">Facebook</td>
            <td class="span span">Somebody requested a new password </td>
            <td class="span "></td>
            <td class="span text-right">June 13</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td class="span">Skype <span class="label label-info pull-right">family</span></td>
            <td class="span span">Password successfully changed</td>
            <td class="span "></td>
            <td class="span text-right">March 24</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star inbox-started"></i></td>
            <td class="span">Google+</td>
            <td class="span">alireza, do you know</td>
            <td class="span "></td>
            <td class="span text-right">March 09</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star inbox-started"></i></td>
            <td>Zoosk </td>
            <td class="span">7 new singles we think you'll like</td>
            <td class="span "><i class="fa fa-paperclip"></i></td>
            <td class="span text-right">May 14</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td class="span">LinkedIn </td>
            <td class="span">Alireza: Nokia Networks, System Group and </td>
            <td class="span "><i class="fa fa-paperclip"></i></td>
            <td class="span text-right">February 25</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td >Facebook</td>
            <td class="span span">Your account was recently logged into</td>
            <td class="span "></td>
            <td class="span text-right">March 14</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td class="span">Twitter</td>
            <td class="span">Your Twitter password has been changed</td>
            <td class="span "></td>
            <td class="span text-right">April 07</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td class="span">InternetSeer Website Monitoring</td>
            <td class="span">http://golddesigner.org/ Performance Report</td>
            <td class="span "></td>
            <td class="span text-right">July 14</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star inbox-started"></i></td>
            <td class="span">AddMe.com</td>
            <td class="span">Submit Your Website to the AddMe Business Directory</td>
            <td class="span "></td>
            <td class="span text-right">August 10</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td class="span">Terri Rexer, S P N</td>
            <td class="span span">Forget Google AdWords: Un-Limited Clicks fo</td>
            <td class="span "><i class="fa fa-paperclip"></i></td>
            <td class="span text-right">April 14</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td class="span">Bertina </td>
            <td class="span">IMPORTANT: Don't lose your domains!</td>
            <td class="span "><i class="fa fa-paperclip"></i></td>
            <td class="span text-right">June 16</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star inbox-started"></i></td>
            <td class="span">Laura Gaffin, S P N </td>
            <td class="span">Your Website On Google (Higher Rankings Are Better)</td>
            <td class="span "></td>
            <td class="span text-right">August 10</td>
        </tr>
        <tr class="">
            <td class="">
                <input type="checkbox" class="">
            </td>
            <td class=""><i class="fa fa-star"></i></td>
            <td class="span">Facebook</td>
            <td class="span span">Alireza Zare Login faild</td>
            <td class="span "><i class="fa fa-paperclip"></i></td>
            <td class="span text-right">feb 14</td>
        </tr>
    </tbody>
    </table>
    </div>
</aside>
