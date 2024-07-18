var sellerId = "{{ $seller_id }}";
function fetchRfqs(sellerId) {
    $.ajax({
       url: '/seller/' + sellerId + '/rfq-data',
       type: 'GET',
       dataType: 'json',
       success: function(response) {
          if(response.success) {
             let rfqs = response.data;
             let tableBody = $('#rfqTableBody');
             tableBody.empty();

             rfqs.forEach((rfq, index) => {
               let date = rfq.Date ? rfq.Date : '';
                tableBody.append(`
                   <tr class="buyer-dashboard-recent-activity-table-outer">
                      <td  class="buyer-dashboard-right-border">${index + 1}</td>
                      <td  class="buyer-dashboard-right-border">${rfq.rfq_number}</td>
                      <td  class="buyer-dashboard-right-border">${date}</td>
                      <td  class="buyer-dashboard-right-border">${rfq.product_count}</td>
                      <td class="editing_list align-middle">
                       <ul>
                            <li class="list-inline-item mb-1">
                             <a href="/singlerfqview/${rfq.rfq_id}" data-bs-toggle="tooltip" data-bs-placement="top" title="View" aria-label="View">
                             <i class="fa fa-eye"></i>
                             </a>
                           </li>


                          <li class="list-inline-item mb-1">
                            <a href="/single-seller-rfq-edit/${rfq.rfq_id}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                          </li>
                          <li class="list-inline-item mb-1">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="History" data-bs-original-title="History" aria-label="History"><i class="fa fa-history" aria-hidden="true"></i></a>
                          </li>
                        </ul>
                      </td>
                   </tr>
                `);
             });
          } else {
             $('#rfqTableBody').html('<tr><td colspan="5">No RFQs found for this seller.</td></tr>');
          }
       },
       error: function(xhr) {
          console.error(xhr.responseText);
       }
    });
 }

 $(document).ready(function() {
     
 function getBuyerIdFromUrl() {
    var pathArray = window.location.pathname.split('/');
    return pathArray[pathArray.length - 1];
}


function fetchRfqCount(sellerId) {
   $.ajax({
       url: '/seller/' + sellerId + '/rfq-count',
       type: 'GET',
       dataType: 'json',
       success: function(response) {
           if (response.success) {
               $('#totalRfqCount').text(response.rfq_count); // Update the RFQ count
           } else {
               console.error('Failed to fetch RFQ count:', response.message);
               $('#totalRfqCount').text('0'); // Display default count if failed
           }
       },
       error: function(xhr) {
           console.error('Error fetching RFQ count:', xhr.responseText);
           $('#totalRfqCount').text('0'); // Display default count on error
       }
   });
}


function fetchProductCount(sellerId) {
   $.ajax({
       url: '/singleSellerProductCount/' + sellerId,
       type: 'GET',
       dataType: 'json',
       success: function(response) {
           if (response.success) {
               $('#totalProductCount').text(response.total_product_count); // Update the RFQ count
           } else {
               console.error('Failed to fetch RFQ count:', response.message);
               $('#totalProductCount').text('0'); // Display default count if failed
           }
       },
       error: function(xhr) {
           console.error('Error fetching RFQ count:', xhr.responseText);
           $('#totalRfqCount').text('0'); // Display default count on error
       }
   });
}

function fetchProducts(sellerId) {
    $.ajax({
        url: `/singleSellerProductDetail/${sellerId}`,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                let rfqs = response.product_details;
                let tableBody = $('#products-table tbody');
                tableBody.empty();

                rfqs.forEach((product, index) => {
                    tableBody.append(`
                        <tr class="buyer-dashboard-recent-activity-table-outer">
                            <td class="buyer-dashboard-right-border">${index + 1}</td>
                            <td class="buyer-dashboard-right-border">${product.product_name}</td>
                            <td class="buyer-dashboard-right-border product-image-buyer-rfq-page">
                               <img src="/${product.tbl_image}" style="width: 60%; height: 100%;" />
                            </td>
                            <td class="buyer-dashboard-right-border">${product.category}</td>
                            <td class="buyer-dashboard-right-border">${product.tbl_selling_price}</td>
                            <td class="buyer-dashboard-right-border">${product.status}</td>
                            <td class="editing_list align-middle">
                                <ul>
                                    <li class="list-inline-item mb-1">
                                        <a href="/singleSellerProductview/${sellerId}/${product.sellerrfq_id}" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                    </li>
                                    <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    `);
                });
            } else {
                $('#products-table tbody').html('<tr><td colspan="7">No products found for this seller.</td></tr>');
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText);
        }
    });
}


// Fetch RFQs for the buyer when the page loads
var sellerId = getBuyerIdFromUrl();
console.log("Buyer ID from URL:", sellerId); // Log buyer ID to the console
fetchRfqs(sellerId);
fetchRfqCount(sellerId);
fetchProductCount(sellerId);
fetchProducts(sellerId);

 
    $('#defaultOpen').click();
 });


 // Get the element with id="defaultOpen" and click on it
 document.getElementById("defaultOpen").click();