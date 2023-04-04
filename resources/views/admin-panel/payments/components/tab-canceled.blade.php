 <!-- Card -->
 <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["number", "name", "date", "system", "quantity", "status"], "page": 10}' id="paymentsCancelled">
     <div class="card-header flex-wrap border-0 card-header-space-between py-lg-6">

         <!-- Search -->
         <div class="mb-2 ms-lg-2 me-auto pe-6">
             <div class="input-group input-group-merge w-175px">

                 <!-- Button -->
                 <span class="input-group-text p-0 border-0 bg-light-green">
                     <button class="btn btn-link text-dark ps-4 pe-0" type="button">
                         <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg')}}">
                             <path d="M0.750 9.812 A9.063 9.063 0 1 0 18.876 9.812 A9.063 9.063 0 1 0 0.750 9.812 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(-3.056 4.62) rotate(-23.025)" />
                             <path d="M16.221 16.22L23.25 23.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                         </svg>
                     </button>
                 </span>

                 <!-- Input -->
                 <input type="text" class="form-control bg-light-green border-0" placeholder="Search">

             </div>
         </div>
         <!-- Date Input -->
         <div class="input-group mb-2 w-250px" data-flatpickr='{
                        "dateFormat": "d/m/y",
                        "wrap": "true"
                        }'>
             <span class="input-group-text cursor-pointer border-0 bg-light-green" data-toggle>
                 <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
                     <path d="M2 20C1.45 20 0.979002 19.804 0.587002 19.412C0.195002 19.02 -0.000664969 18.5493 1.69779e-06 18V4C1.69779e-06 3.45 0.196002 2.979 0.588002 2.587C0.980002 2.195 1.45067 1.99933 2 2H3V0H5V2H13V0H15V2H16C16.55 2 17.021 2.196 17.413 2.588C17.805 2.98 18.0007 3.45067 18 4V18C18 18.55 17.804 19.021 17.412 19.413C17.02 19.805 16.5493 20.0007 16 20H2ZM2 18H16V8H2V18ZM2 6H16V4H2V6ZM9 12C8.71667 12 8.479 11.904 8.287 11.712C8.095 11.52 7.99934 11.2827 8 11C8 10.7167 8.096 10.479 8.288 10.287C8.48 10.095 8.71734 9.99933 9 10C9.28334 10 9.521 10.096 9.713 10.288C9.905 10.48 10.0007 10.7173 10 11C10 11.2833 9.904 11.521 9.712 11.713C9.52 11.905 9.28267 12.0007 9 12ZM5 12C4.71667 12 4.479 11.904 4.287 11.712C4.095 11.52 3.99934 11.2827 4 11C4 10.7167 4.096 10.479 4.288 10.287C4.48 10.095 4.71734 9.99933 5 10C5.28334 10 5.521 10.096 5.713 10.288C5.905 10.48 6.00067 10.7173 6 11C6 11.2833 5.904 11.521 5.712 11.713C5.52 11.905 5.28267 12.0007 5 12ZM13 12C12.7167 12 12.479 11.904 12.287 11.712C12.095 11.52 11.9993 11.2827 12 11C12 10.7167 12.096 10.479 12.288 10.287C12.48 10.095 12.7173 9.99933 13 10C13.2833 10 13.521 10.096 13.713 10.288C13.905 10.48 14.0007 10.7173 14 11C14 11.2833 13.904 11.521 13.712 11.713C13.52 11.905 13.2827 12.0007 13 12ZM9 16C8.71667 16 8.479 15.904 8.287 15.712C8.095 15.52 7.99934 15.2827 8 15C8 14.7167 8.096 14.479 8.288 14.287C8.48 14.095 8.71734 13.9993 9 14C9.28334 14 9.521 14.096 9.713 14.288C9.905 14.48 10.0007 14.7173 10 15C10 15.2833 9.904 15.521 9.712 15.713C9.52 15.905 9.28267 16.0007 9 16ZM5 16C4.71667 16 4.479 15.904 4.287 15.712C4.095 15.52 3.99934 15.2827 4 15C4 14.7167 4.096 14.479 4.288 14.287C4.48 14.095 4.71734 13.9993 5 14C5.28334 14 5.521 14.096 5.713 14.288C5.905 14.48 6.00067 14.7173 6 15C6 15.2833 5.904 15.521 5.712 15.713C5.52 15.905 5.28267 16.0007 5 16ZM13 16C12.7167 16 12.479 15.904 12.287 15.712C12.095 15.52 11.9993 15.2827 12 15C12 14.7167 12.096 14.479 12.288 14.287C12.48 14.095 12.7173 13.9993 13 14C13.2833 14 13.521 14.096 13.713 14.288C13.905 14.48 14.0007 14.7173 14 15C14 15.2833 13.904 15.521 13.712 15.713C13.52 15.905 13.2827 16.0007 13 16Z" fill="currentColor" />
                 </svg>

             </span>
             <input type="text" class="form-control border-0 me-4 ps-0 bg-light-green" placeholder="dd/mm/yy" data-input>
         </div>

         <!-- Dropdown -->
         <div class="dropdown ms-lg-3 me-lg-2 d-none d-sm-block">
             <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-gray-500" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <svg xmlns="http://www.w3.org/2000/svg')}}" viewBox="0 0 24 24" height="14" width="14">
                     <g>
                         <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor" />
                         <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                         <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor" />
                     </g>
                 </svg>
             </a>
             <div class="dropdown-menu">
                 <a href="javascript: void(0);" class="dropdown-item">
                     Export report
                 </a>
                 <a href="javascript: void(0);" class="dropdown-item">
                     Share
                 </a>
                 <a href="javascript: void(0);" class="dropdown-item">
                     Action
                 </a>
             </div>
         </div>
     </div>
     <!-- Table -->
     <div class="table-responsive">
         <table class="table user-table align-middle table-edge table-hover table-nowrap mb-0">
             <thead class="thead-light">
                 <tr>
                     <th class="w-60px pe-0">
                         <div class="form-check mb-0">
                             <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                         </div>
                     </th>
                     <th class="ps-3">
                         <a href="javascript: void(0);" class="text-muted list-sort" data-sort="number">
                             #
                         </a>
                     </th>
                     <th>
                         <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                             User name
                         </a>
                     </th>
                     <th>
                         <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                             Create date
                         </a>
                     </th>
                     <th>
                         <a href="javascript: void(0);" class="text-muted list-sort" data-sort="system">
                             Payment system
                         </a>
                     </th>
                     <th>
                         <a href="javascript: void(0);" class="text-muted list-sort" data-sort="quantity">
                             Quantity
                         </a>
                     </th>
                     <th>
                         <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                             Status
                         </a>
                     </th>
                     <th class="w-150px text-center">
                         <a href="javascript: void(0);" class="text-muted">
                             Actions
                         </a>
                     </th>
                 </tr>
             </thead>

             <tbody class="list">
                 <tr>
                     <td class="pe-0">
                         <div class="form-check mb-0">
                             <input class="form-check-input" type="checkbox" value="">
                         </div>
                     </td>
                     <td class="number ps-3">3</td>
                     <td>
                         <div class="avatar avatar-circle avatar-xs me-2">
                             <img src="{{asset('assets_project/assets/images/profiles/profile-16.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                         </div>
                         <span class="name fw-bold">Halee P. Lane</span>
                     </td>
                     <td class="date">05/01/22</td>
                     <td class="system">
                         <img src="{{asset('assets_project/assets/images/logos/paypal.png')}}" alt="pay-pal">
                     </td>
                     <td class="quantity">1000</td>
                     <td class="status"><span class="status-cancelled">Cancelled</span></td>
                     <td class="edit text-center">
                         <a class="view" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                         </a>
                         <a class="edit mx-5" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                         </a>
                         <a class="delete" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                         </a>
                     </td>
                 </tr>
                 <tr>
                     <td class="pe-0">
                         <div class="form-check mb-0">
                             <input class="form-check-input" type="checkbox" value="">
                         </div>
                     </td>
                     <td class="number ps-3">5</td>
                     <td>
                         <div class="avatar avatar-circle avatar-xs me-2">
                             <img src="{{asset('assets_project/assets/images/profiles/profile-17.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                         </div>
                         <span class="name fw-bold">Galena Oliver</span>
                     </td>
                     <td class="date">05/01/22</td>
                     <td class="system">
                         <img src="{{asset('assets_project/assets/images/logos/paypal.png')}}" alt="pay-pal">
                     </td>
                     <td class="quantity">1000</td>
                     <td class="status"><span class="status-cancelled">Cancelled</span></td>
                     <td class="edit text-center">
                         <a class="view" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                         </a>
                         <a class="edit mx-5" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                         </a>
                         <a class="delete" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                         </a>
                     </td>
                 </tr>
                 <tr>
                     <td class="pe-0">
                         <div class="form-check mb-0">
                             <input class="form-check-input" type="checkbox" value="">
                         </div>
                     </td>
                     <td class="number ps-3">6</td>
                     <td>
                         <div class="avatar avatar-circle avatar-xs me-2">
                             <img src="{{asset('assets_project/assets/images/profiles/profile-19.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                         </div>
                         <span class="name fw-bold">Kelly Doyle</span>
                     </td>
                     <td class="date">05/01/22</td>
                     <td class="system">
                         <img src="{{asset('assets_project/assets/images/logos/stripe.png')}}" alt="stripe">
                     </td>
                     <td class="quantity">1000</td>
                     <td class="status"><span class="status-cancelled">Cancelled</span></td>
                     <td class="edit text-center">
                         <a class="view" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                         </a>
                         <a class="edit mx-5" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                         </a>
                         <a class="delete" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                         </a>
                     </td>
                 </tr>
                 <tr>
                     <td class="pe-0">
                         <div class="form-check mb-0">
                             <input class="form-check-input" type="checkbox" value="">
                         </div>
                     </td>
                     <td class="number ps-3">10</td>
                     <td>
                         <div class="avatar avatar-circle avatar-xs me-2">
                             <img src="{{asset('assets_project/assets/images/profiles/profile-26.jpeg')}}" alt="..." class="avatar-img" width="30" height="30">
                         </div>
                         <span class="name fw-bold">Macon Dean</span>
                     </td>
                     <td class="date">05/01/22</td>
                     <td class="system">
                         <img src="{{asset('assets_project/assets/images/logos/stripe.png')}}" alt="stripe">
                     </td>
                     <td class="quantity">1000</td>
                     <td class="status"><span class="status-cancelled">Cancelled</span></td>
                     <td class="edit text-center">
                         <a class="view" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/eye.svg')}}" alt="...">
                         </a>
                         <a class="edit mx-5" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/pencil.svg')}}" alt="...">
                         </a>
                         <a class="delete" href="javascript: void(0);">
                             <img src="{{asset('assets_project/assets/images/trash.svg')}}" alt="...">
                         </a>
                     </td>
                 </tr>

             </tbody>
         </table>
     </div> <!-- / .table-responsive -->
     <div class="card-footer">
         <div class="d-flex justify-content-between align-items-center">
             <div class="me-5 text-gray-500 small">
                 Showing: <span class="list-pagination-page-first"></span> - <span class="list-pagination-page-last"></span> of <span class="list-pagination-pages"></span>
             </div>

             <!-- Pagination -->
             <div class="pagination-wrap d-flex align-items-center">
                 <!-- Button -->
                 <button type="button" class="d-none me-lg-5 list-pagination-prev border-0 bg-white p-0 d-lg-inline-flex align-items-center justify-content-center" disabled>Prev
                 </button>
                 <ul class="pagination list-pagination mb-0">

                 </ul>
                 <!-- Button -->
                 <button type="button" class="d-none ms-lg-5 list-pagination-next border-0 bg-white p-0 d-lg-inline-flex align-items-center justify-content-center" disabled>Next
                 </button>
             </div>
         </div>
     </div>

 </div>