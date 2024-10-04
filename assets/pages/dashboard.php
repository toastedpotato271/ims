<?php 
$page_title = "Dashboard - GRP3.";
$additional_css = [
  '../css/queue-table.css',
];
include '../partials/header_dashboard.php'; 
?>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Welcome Back! "User Name"</h3>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Total Reports</p>
                          <h4 class="card-title">5789</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-user-check"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">In Progress</p>
                          <h4 class="card-title">50</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-luggage-cart"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Cancelled</p>
                          <h4 class="card-title">20</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small"
                        >
                          <i class="far fa-check-circle"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">For Review</p>
                          <h4 class="card-title">53</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Quick Overview</div>
                      <div class="card-tools">
                        <a
                          href="#"
                          class="btn btn-label-success btn-round btn-sm me-2"
                        >
                          <span class="btn-label">
                            <i class="fa fa-pencil"></i>
                          </span>
                          Export
                        </a>
                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                          <span class="btn-label">
                            <i class="fa fa-print"></i>
                          </span>
                          Print
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                      <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-primary card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Cases Resolved</div>
                      <div class="card-tools">
                      </div>
                    </div>
                    <div class="card-category">March 25 - April 02</div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                      <h1>3587</h1>
                    </div>
                    <div class="pull-in">
                      <canvas id="dailySalesChart"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card card-round">
                  <div class="card-body pb-0">
                    <div class="h1 fw-bold float-end text-primary">+5%</div>
                    <h2 class="mb-2">17</h2>
                    <p class="text-muted">Users online</p>
                    <div class="pull-in sparkline-fix">
                      <div id="lineChart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <main class="queue-list">
                  <div class="card card-round queue-box">
                    <div class="card-header">
                      <div class="card-head-row card-tools-still-right">
                        <h4 class="card-title">Recent Reports</h4>
                        <div class="card-tools">
                          <button class="btn btn-icon btn-link btn-primary btn-xs">
                            <span class="fa fa-angle-down"></span>
                          </button>
                          <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card">
                            <span class="fa fa-sync-alt"></span>
                          </button>
                          <button class="btn btn-icon btn-link btn-primary btn-xs">
                            <span class="fa fa-times"></span>
                          </button>
                        </div>
                      </div>
                      <p class="card-category">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </p>
                    </div>
                    <div class="card-body">
                      <div class="row">
                      <div class="b-page__flats b-flats">
                        <div class="b-container b-container_without-padding">
                        <table class="b-flats-table">
                        <thead>
                        <tr>
                        <th>ICID No.</th>
                        <th>Title</th>
                        <th>
                        <span class="i-sortable i-sortable_active-asc" data-field="number">
                        <span>Description</span>
                        </span>
                        </th>
                        <th>
                        <span class="i-sortable" data-field="floor">
                        <span>Type</span>
                        </span>
                        </th>
                        <th>
                        <span class="i-sortable" data-field="rooms">
                        <span>Priority</span>
                        </span>
                        </th>
                        <th>
                        <span class="i-sortable" data-field="area">
                        <span>Status</span>
                        </span>
                        </th>
                        <th>
                        <span class="i-sortable" data-field="program">
                        <span>Time Reported</span>
                        </span>
                        </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!--1-->
                        <tr class="b-flats-table__third-level" data-id="25754">
                          <td class="i-t-f__none">
                              <span class="i-set-border-underline">Val1</span>      
                          </td>
                          <td class="i-t-f__number">
                            <a class="b-flats-table__toggle" id="report-title">Val2 - Incident Title</a>
                            <div class="i-t-f__building" id="report-id">Val1 - ICID NO.</div>
                            <div class="i-t-f__title">
                              <!-- Mobile Values-->
                              <a>Val2 - Incident Title</a><br>
                              <p>Cell 1.4 Lorem ipsum dolor sit amet, consectetur adipiscing eli... </p>
                            </div>
                          </td>
                          <td class="i-t-f__number-room">Cell 1.5 Lorem ipsum dolor sit amet, consectet... </td>
                          <td class="i-t-f__floor">Cell 1.6</td>
                          <td class="i-t-f__rooms">Cell 1.7</td>
                          <td class="i-t-f__area">
                            <select name="status" id="staus-box">
                              <option value="waiting">Waiting</option>
                              <option value="pending">Pending</option>
                              <option value="inprogress">In Progress</option>
                              <option value="open">Open</option>
                              <option value="finished">Finished</option>
                            </select>
                          </td>
                          <td class="i-t-f__prog">Cell 1.9</td>
                        </tr>
                          <!--2--> 
                        <tr class="b-flats-table__third-level" data-id="25755">
                          <td class="i-t-f__none">
                                <span class="i-set-border-underline">C111-2</span>      
                          </td>
                          <td class="i-t-f__number">
                            <a class="b-flats-table__toggle">1</a>
                            <div class="i-t-f__building">«ECO Life», 1 секция</div>
                            <div class="i-t-f__title">
                              <a>1-комнатная кв. № 9<br>
                              <p>1-й этаж</p>        
                              </a>
                            </div>
                          </td>
                          <td class="i-t-f__number-room">9</td>
                          <td class="i-t-f__floor">3</td>
                          <td class="i-t-f__rooms">3</td>
                          <td class="i-t-f__area">
                          <select name="status" id="staus-box">
                              <option value="waiting">Waiting</option>
                              <option value="pending">Pending</option>
                              <option value="inprogress">In Progress</option>
                              <option value="open">Open</option>
                              <option value="finished">Finished</option>
                            </select>
                          </td>
                          <td class="i-t-f__prog">38,50</td>
                        </tr>
                        <!--3-->  
                        <tr class="b-flats-table__third-level" data-id="25756">
                          <td class="i-t-f__none">  
                              <span class="i-set-border-underline">C111-3</span>      
                          </td>
                          <td class="i-t-f__number">
                            <a class="b-flats-table__toggle">1</a>
                            <div class="i-t-f__building">«ECO Life», 1 секция</div>
                            <div class="i-t-f__title">
                              <a>1-комнатная кв. № 9<br>
                              <p>1-й этаж</p>        
                              </a>
                            </div>
                          </td>
                          <td class="i-t-f__number-room">9</td>
                          <td class="i-t-f__floor">3</td>
                          <td class="i-t-f__rooms">3</td>
                          <td class="i-t-f__area">
                          <select name="status" id="staus-box">
                              <option value="waiting">Waiting</option>
                              <option value="pending">Pending</option>
                              <option value="inprogress">In Progress</option>
                              <option value="open">Open</option>
                              <option value="finished">Finished</option>
                            </select>
                          </td>
                          <td class="i-t-f__prog">38,50</td>
                        </tr>
                        <!--4--> 
                        <tr class="b-flats-table__third-level" data-id="25756">
                          <td class="i-t-f__none">
                                <span class="i-set-border-underline">C111-4</span>      
                          </td>
                          <td class="i-t-f__number">
                            <a class="b-flats-table__toggle">1</a>
                            <div class="i-t-f__building">«ECO Life», 1 секция</div>
                            <div class="i-t-f__title">
                              <a>1-комнатная кв. № 9<br>
                              <p>1-й этаж</p>        
                              </a>
                            </div>
                          </td>
                          <td class="i-t-f__number-room">89</td>
                          <td class="i-t-f__floor">15</td>
                          <td class="i-t-f__rooms">3</td>
                          <td class="i-t-f__area">
                          <select name="status" id="staus-box">
                              <option value="waiting">Waiting</option>
                              <option value="pending">Pending</option>
                              <option value="inprogress">In Progress</option>
                              <option value="open">Open</option>
                              <option value="finished">Finished</option>
                            </select>
                          </td>
                          <td class="i-t-f__prog">81</td>
                        </tr>
                        <!--5--> 
                        <tr class="b-flats-table__third-level" data-id="25756">
                          <td class="i-t-f__none">
                            <span class="i-set-border-underline">C111-5</span>      
                          </td>
                          <td class="i-t-f__number">
                            <a class="b-flats-table__toggle">1</a>
                            <div class="i-t-f__building">«ECO Life», 1 секция</div>
                            <div class="i-t-f__title">
                              <a>1-комнатная кв. № 9<br>
                              <p>1-й этаж</p>        
                              </a>
                            </div>
                          </td>
                          <td class="i-t-f__number-room">80</td>
                          <td class="i-t-f__floor">13</td>
                          <td class="i-t-f__rooms">4</td>
                          <td class="i-t-f__area">
                          <select name="status" id="staus-box">
                              <option value="waiting">Waiting</option>
                              <option value="pending">Pending</option>
                              <option value="inprogress">In Progress</option>
                              <option value="open">Open</option>
                              <option value="finished">Finished</option>
                            </select>    
                          </td>
                          <td class="i-t-f__prog">38,50</td>
                        </tr>
                        
                        <tr class="points-data" data-points="[{&quot;title&quot;:&quot;Покровский&quot;,&quot;lat&quot;:56.8724,&quot;lng&quot;:53.2395,&quot;id&quot;:41,&quot;icon&quot;:&quot;/system/estates/map_icons/41_original.png?1494013777&quot;,&quot;iconSize&quot;:&quot;66x102&quot;,&quot;completed&quot;:false,&quot;future&quot;:false}]" style="display: none"></tr>

                        </tbody>
                        </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </main>
                </div>
              </div>
            
            <div class="row">
              <div class="col-md-4">
                <div class="card card-round">
                  <div class="card-body">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Team</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-icon btn-clean me-0"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-list py-4">
                      <div class="item-list">
                        <div class="avatar">
                          <img
                            src="../img/dashboard/jm_denis.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          />
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Jimmy Denis</div>
                          <div class="status">Graphic Designer</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <i class="fas fa-ban"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <span
                            class="avatar-title rounded-circle border border-white"
                            >CF</span
                          >
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Chandra Felix</div>
                          <div class="status">Sales Promotion</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <i class="fas fa-ban"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <img
                            src="../img/dashboard/talha.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          />
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Talha</div>
                          <div class="status">Front End Designer</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <i class="fas fa-ban"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <img
                            src="../img/dashboard/chadengle.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          />
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Chad</div>
                          <div class="status">CEO Zeleaf</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <i class="fas fa-ban"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <span
                            class="avatar-title rounded-circle border border-white bg-primary"
                            >H</span
                          >
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Hizrian</div>
                          <div class="status">Web Designer</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <i class="fas fa-ban"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <span
                            class="avatar-title rounded-circle border border-white bg-secondary"
                            >F</span
                          >
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Farrah</div>
                          <div class="status">Marketing</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <i class="fas fa-ban"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Transaction History</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-icon btn-clean me-0"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Payment Number</th>
                            <th scope="col" class="text-end">Date & Time</th>
                            <th scope="col" class="text-end">Amount</th>
                            <th scope="col" class="text-end">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                            <td class="text-end">$250.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                            <td class="text-end">$250.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                            <td class="text-end">$250.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                            <td class="text-end">$250.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                            <td class="text-end">$250.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                            <td class="text-end">$250.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end">Mar 19, 2020, 2.45pm</td>
                            <td class="text-end">$250.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>

<?php include '../partials/footer_dashboard.php'; ?>