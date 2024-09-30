<?php 
$page_title = "Incident List - GRP3.";
$additional_css = [
  '../css/queue-table.css',
];
include '../partials/header_dashboard.php'; 
?>

<div class="container">
<main class="queue-list">
  <div class="card card-round queue-box">
    <div class="card-header">
      <div class="card-head-row card-tools-still-right">
        <h4 class="card-title">Incident List</h4>
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
        <!--6-->   
        <tr class="b-flats-table__third-level" data-id="25756">
          <td class="i-t-f__none">
          <span class="i-set-border-underline">C111-6</span>        
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
          <td class="i-t-f__number-room">98</td>
          <td class="i-t-f__floor">16</td>
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
          <td class="i-t-f__prog">118,2</td>
        </tr>
        <!--7-->  
        <tr class="b-flats-table__third-level" data-id="25756">
          <td class="i-t-f__none">
          <span class="i-set-border-underline">C111-7</span> 
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
          <td class="i-t-f__number-room">126</td>
          <td class="i-t-f__floor">16</td>
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
          <td class="i-t-f__prog">118,2</td>
        </tr>
        <!--8-->   
        <tr class="b-flats-table__third-level" data-id="25756">
          <td class="i-t-f__none">
          <span class="i-set-border-underline">C111-8</span>  
          </td>
          <td class="i-t-f__number">
            <a class="b-flats-table__toggle">2</a>
            <div class="i-t-f__building">«ECO Life», 2 секция</div>
            <div class="i-t-f__title">
              <a>1-комнатная кв. № 11<br>
              <p>3-й этаж</p>        
              </a>
            </div>
          </td>
          <td class="i-t-f__number-room">11</td>
          <td class="i-t-f__floor">3</td>
          <td class="i-t-f__rooms">11</td>
          <td class="i-t-f__area">
          <select name="status" id="staus-box">
              <option value="waiting">Waiting</option>
              <option value="pending">Pending</option>
              <option value="inprogress">In Progress</option>
              <option value="open">Open</option>
              <option value="finished">Finished</option>
            </select>
          </td>
          <td class="i-t-f__prog">34,20</td>
        </tr>
        <!--9-->   
        <tr class="b-flats-table__third-level" data-id="25756">
          <td class="i-t-f__none">
          <span class="i-set-border-underline">C111-9</span>      
          </td>
          <td class="i-t-f__number">
            <a class="b-flats-table__toggle">1</a>
            <div class="i-t-f__building">«ECO Life», 2 секция</div>
            <div class="i-t-f__title">
              <a>1-комнатная кв. № 1<br>
              <p>3-й этаж</p>        
              </a>
            </div>
          </td>
          <td class="i-t-f__number-room">2</td>
          <td class="i-t-f__floor">3</td>
          <td class="i-t-f__rooms">1</td>
          <td class="i-t-f__area">
            <select name="status" id="staus-box">
              <option value="waiting">Waiting</option>
              <option value="pending">Pending</option>
              <option value="inprogress">In Progress</option>
              <option value="open">Open</option>
              <option value="finished">Finished</option>
            </select>
          </td>
          <td class="i-t-f__prog">80,04</td>
        </tr>

        <tr class="points-data" data-points="[{&quot;title&quot;:&quot;Покровский&quot;,&quot;lat&quot;:56.8724,&quot;lng&quot;:53.2395,&quot;id&quot;:41,&quot;icon&quot;:&quot;/system/estates/map_icons/41_original.png?1494013777&quot;,&quot;iconSize&quot;:&quot;66x102&quot;,&quot;completed&quot;:false,&quot;future&quot;:false}]" style="display: none"></tr>

        </tbody>
        </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</main>
</div>

<?php include '../partials/footer_dashboard.php'; ?>