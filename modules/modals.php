<!-- Update Payment Details -->
<div class="modal fade" id="updatePayment" tabindex="-1" role="dialog" aria-labelledby="updatePaymentLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mb-0">Update payment Information</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg width="22" height="22" class="close-icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-content">
                    <form action="" role="form">
                        <div class="payment-picker">
                            <div class="card-type--text"><span class="selectionLabel">Credit or Debit Card</span></div>
                            <div class="logos-container">
                                <div class="logos logos-inline" aria-label="We accept VISA, MASTERCARD and VERVE.">
                                    <img alt="" class="logo-icon VISA" src="images/icons/visa-icon.svg">
                                    <img alt="" class="logo-icon MASTERCARD" src="images/icons/mastercard-icon.svg">
                                    <img alt="" class="logo-icon VERVE" src="images/icons/verve-icon.png">
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative">
                            <label class="form-control-label" for="card-number">Card details</label>
                            <span class="secured-by-text">
                                <svg width="11px" height="14px" viewBox="0 0 11 14" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <g id="Specific---3.-Start-free-trial---Web"
                                            transform="translate(-428.000000, -304.000000)">
                                            <g id="Group-23" transform="translate(263.000000, 146.000000)">
                                                <g id="Group-12" transform="translate(0.000000, 66.000000)">
                                                    <g id="icon-payment" transform="translate(166.000000, 93.000000)">
                                                        <path
                                                            d="M8.57142857,11.5714286 L0.857142857,11.5714286 C0.342857143,11.5714286 0,11.2285714 0,10.7142857 L0,5.57142857 C0,5.05714286 0.342857143,4.71428571 0.857142857,4.71428571 L8.57142857,4.71428571 C9.08571429,4.71428571 9.42857143,5.05714286 9.42857143,5.57142857 L9.42857143,10.7142857 C9.42857143,11.2285714 9.08571429,11.5714286 8.57142857,11.5714286 Z"
                                                            id="Stroke-1" stroke="#687992" fill="#687992"></path>
                                                        <path
                                                            d="M7.71428571,4.71428571 L1.71428571,4.71428571 L1.71428571,3.42857143 C1.71428571,1.8 3.08571429,0.428571429 4.71428571,0.428571429 L4.71428571,0.428571429 C6.34285714,0.428571429 7.71428571,1.8 7.71428571,3.42857143 L7.71428571,4.71428571 Z"
                                                            id="Stroke-3" stroke="#687992"></path>
                                                        <line x1="4.71428571" y1="7.28571429" x2="4.71428571" y2="9"
                                                            id="Stroke-5" stroke="#FFFFFF"></line>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span>Secured by stripe</span>
                            </span>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="card-number">
                                        <i class="fas fa fa-credit-card"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="card-number" value=""
                                    placeholder="1234 1234 1234 1234">
                            </div>
                            <div class="input-group">
                                <input type="text" name="currency_amount" class="form-control" placeholder="0.0214 BTC">
                                <input type="text" name="usd_amount" class="form-control" placeholder="125.00 USD">
                                <input type="text" name="usd_amount" class="form-control" placeholder="125.00 USD">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="exp-date">Expiration</label>
                                    <input type="text" class="form-control" id="exp-date" name="exp-date"
                                        placeholder="MM/YY">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label d-flex" for="cvc">
                                        <span>Security Code (CVV)</span>
                                        <div class="form-tooltip" data-toggle="tooltip" data-placement="top"
                                            title="Your card's security code (CVV) is the 3 or 4 digit number located on the back of most cards.">
                                            ?</div>
                                    </label>
                                    <input type="text" class="form-control" id="cvc" name="cvc" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="mt-xs-4">
                            <a href="#" class="btn btn-default btn-primary btn-md shadow-0 mb-2" data-toggle="modal"
                                data-target="#paymentModal">Update payment info</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Buy More Credit -->
<div class="modal fade" id="buyCredit" tabindex="-1" role="dialog" aria-labelledby="buyCreditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mb-0">Update payment Information</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg width="22" height="22" class="close-icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-content">
                    <form action="" role="form">
                        <div class="payment-picker">
                            <div class="card-type--text"><span class="selectionLabel">Credit or Debit Card</span></div>
                            <div class="logos-container">
                                <div class="logos logos-inline" aria-label="We accept VISA, MASTERCARD and VERVE.">
                                    <img alt="" class="logo-icon VISA" src="images/icons/visa-icon.svg">
                                    <img alt="" class="logo-icon MASTERCARD" src="images/icons/mastercard-icon.svg">
                                    <img alt="" class="logo-icon VERVE" src="images/icons/verve-icon.png">
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative">
                            <label class="form-control-label" for="card-number">Card details</label>
                            <span class="secured-by-text">
                                <svg width="11px" height="14px" viewBox="0 0 11 14" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <g id="Specific---3.-Start-free-trial---Web"
                                            transform="translate(-428.000000, -304.000000)">
                                            <g id="Group-23" transform="translate(263.000000, 146.000000)">
                                                <g id="Group-12" transform="translate(0.000000, 66.000000)">
                                                    <g id="icon-payment" transform="translate(166.000000, 93.000000)">
                                                        <path
                                                            d="M8.57142857,11.5714286 L0.857142857,11.5714286 C0.342857143,11.5714286 0,11.2285714 0,10.7142857 L0,5.57142857 C0,5.05714286 0.342857143,4.71428571 0.857142857,4.71428571 L8.57142857,4.71428571 C9.08571429,4.71428571 9.42857143,5.05714286 9.42857143,5.57142857 L9.42857143,10.7142857 C9.42857143,11.2285714 9.08571429,11.5714286 8.57142857,11.5714286 Z"
                                                            id="Stroke-1" stroke="#687992" fill="#687992"></path>
                                                        <path
                                                            d="M7.71428571,4.71428571 L1.71428571,4.71428571 L1.71428571,3.42857143 C1.71428571,1.8 3.08571429,0.428571429 4.71428571,0.428571429 L4.71428571,0.428571429 C6.34285714,0.428571429 7.71428571,1.8 7.71428571,3.42857143 L7.71428571,4.71428571 Z"
                                                            id="Stroke-3" stroke="#687992"></path>
                                                        <line x1="4.71428571" y1="7.28571429" x2="4.71428571" y2="9"
                                                            id="Stroke-5" stroke="#FFFFFF"></line>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span>Secured by stripe</span>
                            </span>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="card-number">
                                        <i class="fas fa fa-credit-card"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="card-number" value=""
                                    placeholder="1234 1234 1234 1234">
                            </div>
                            <div class="input-group">
                                <input type="text" name="currency_amount" class="form-control" placeholder="0.0214 BTC">
                                <input type="text" name="usd_amount" class="form-control" placeholder="MM/YY">
                                <input type="text" name="usd_amount" class="form-control" placeholder="CVV">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="exp-date">Expiration</label>
                                    <input type="text" class="form-control" id="exp-date" name="exp-date"
                                        placeholder="MM/YY">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label d-flex" for="cvc">
                                        <span>Security Code (CVV)</span>
                                        <div class="form-tooltip" data-toggle="tooltip" data-placement="top"
                                            title="Your card's security code (CVV) is the 3 or 4 digit number located on the back of most cards.">
                                            ?</div>
                                    </label>
                                    <input type="text" class="form-control" id="cvc" name="cvc" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="mt-xs-4">
                            <a href="#" class="btn btn-default btn-primary btn-md shadow-0 mb-2" data-toggle="modal"
                                data-target="#paymentModal">Proceed to checkout</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Billing Details -->
<div class="modal fade" id="billingDetails" tabindex="-1" role="dialog" aria-labelledby="billingDetailsLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg width="22" height="22" class="close-icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="modal-body receipt pt-0">
                <div class="content-wrap">
                    <div class="content-overline">Feb 05, 2023</div>
                    <div class="content-title">Purchase details</div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Date</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">Jan 20, 2023</span>
                        </div>
                    </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Order Number</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">1953029845685100-1-2</span>
                        </div>
                    </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Payment method</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">Visa ending in 9577</span>
                        </div>
                    </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Status</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">
                                <div class="badge badge-success">Success</div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Amount</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">$150.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 2FA -->
<div class="modal fade" id="TwoFactorAuthentication" tabindex="-1" role="dialog"
    aria-labelledby="TwoFactorAuthenticationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg width="22" height="22" class="close-icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="modal-body pt-0">
                <div class="two-factor--content-wrap">
                    <div class="content-overline">Two-factor authentication</div>
                    <div class="content-title">Boost your account's security</div>
                    <p class="content-description">Two-factor authentication is a second step after entering your
                        password to verify it's you signing in. This will protect your ZeroComplex account in case
                        someone learns your password. <a href="#" class="text-link">Learn more</a></p>
                </div>
                <div class="two-factor--selection-card">
                    <div class="two-factor--selection">
                        <div class="selection-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="#222E3A"
                                xmlns="http://www.w3.org/2000/svg" class="icon">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M20 4H4a2 2 0 00-2 2v12c0 1.1.9 2 2 2h16a2 2 0 002-2V6a2 2 0 00-2-2zM4 8l8 5 8-5v10H4V8zm0-2l8 5 8-5H4z">
                                </path>
                            </svg>
                        </div>
                        <div class="selection-text">
                            <div class="text-title">Email address</div>
                            <div class="text-subtitle">Get one-time codes sent to your email to complete authentication
                                requests.</div>
                        </div>
                        <div class="selection-arrow">
                            <svg width="24" height="24" class="arrow-icon" viewBox="0 0 24 24" fill="#222E3A"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.33404 17.6862C7.889 17.2681 7.8886 16.5904 8.33316 16.1719L12.7646 12L8.33316 7.82807C7.8886 7.40955 7.889 6.73185 8.33404 6.31379C8.77942 5.8954 9.50152 5.8954 9.9469 6.31379L16 12L9.9469 17.6862C9.50152 18.1046 8.77942 18.1046 8.33404 17.6862Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="instruction-text mt-4"><b>Note:</b> Turning on two-factor authentication will sign you out
                    and you will then be required to enter a verification code the first time you sign in.</div>
            </div>
        </div>
    </div>
</div>

<!-- Single Transaction View  -->
<div class="modal fade" id="transactionDetailsModal" tabindex="-1" role="dialog"
    aria-labelledby="transactionDetailsModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg width="22" height="22" class="close-icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="modal-body receipt pt-0">
                <div class="content-wrap">
                    <div class="content-title mb-2">Transaction Details</div>
                    <div class="content-overline"> <span class="content-overline-text"> 01 Mar, 2023 </span> </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Date</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">Jan 20, 2023</span>
                        </div>
                    </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Sender</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">Kyle Rock</span>
                        </div>
                    </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Purpose</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">Standard Savings</span>
                        </div>
                    </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Status</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">
                                <div class="badge badge-success">Success</div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Receiver</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">Patrick Kachi</span>
                        </div>
                    </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Amount</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">&#8358; 40,000</span>
                        </div>
                    </div>
                </div>
                <div class="receipt-details--row">
                    <div class="row">
                        <div class="col">
                            <span class="receipt-details--heading">Transaction ID</span>
                        </div>
                        <div class="col text-right">
                            <span class="receipt-details--value">022954914496</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Transaction History -->
<div class="modal fade" id="transactionHistoryModal" tabindex="-1" role="dialog"
    aria-labelledby="transactionHistoryModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg width="22" height="22" class="close-icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="modal-body receipt pt-0">
                <div class="content-wrap">
                    <div class="content-title mb-2">Transaction History</div>
                    <div class="content-overline"> <span class="content-overline-text"> 01 Mar, 2023 - 23 Mar,
                            2023</span> </div>
                </div>
                <a href="user-profile.html">
                    <div class="media d-flex flex-column justify-content-center align-items-center mb-3">
                        <img class="mb-3 rounded-circle mr-0" src="images/avatar-3.png" width="55" height="55" alt="">
                        <div class="media-body">
                            <h4 class="mb-0">Mirabel Chinwe</h4>
                        </div>
                    </div>
                </a>
                <div class="transaction-table users-data-table">
                    <div class="table-responsive">
                        <table class="table mb-0 table-responsive-sm">
                            <thead class="users-data-table-head-container">
                                <tr role="row">
                                    <th rowspan="1" colspan="1">S/N</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149.078px;">
                                        Transaction ID</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 191.906px;">
                                        Transaction Date</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 232.891px;">
                                        Category</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 185.062px;">
                                        Amount
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 185.062px;">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>S-SAVE-0001</td>
                                    <td>02-03-2023</td>
                                    <td><img width="40px" height="40px" src="images/icons/standard-savings-icon.svg"
                                            alt=""></td>
                                    <td class="text-danger">20,000</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>S-SAVE-04091</td>
                                    <td>01-02-2023</td>
                                    <td><img width="40px" height="40px" src="images/icons/standard-savings-icon.svg"
                                            alt=""></td>
                                    <td class="text-success">1,850</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>S-SAVE-0021</td>
                                    <td>10-03-2023</td>
                                    <td><img width="40px" height="40px" src="images/icons/standard-savings-icon.svg"
                                            alt=""></td>
                                    <td class="text-success">15,280</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>S-SAVE-0096</td>
                                    <td>24-02-2023</td>
                                    <td><img width="40px" height="40px" src="images/icons/standard-savings-icon.svg"
                                            alt=""></td>
                                    <td class="text-danger">110,000</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>S-SAVE-0490</td>
                                    <td>10-03-2023</td>
                                    <td><img width="40px" height="40px" src="images/icons/standard-savings-icon.svg"
                                            alt=""></td>
                                    <td class="text-success">200,000</td>
                                    <td><span class="badge badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>S-SAVE-0034</td>
                                    <td>02-01-2023</td>
                                    <td><img width="40px" height="40px" src="images/icons/standard-savings-icon.svg"
                                            alt=""></td>
                                    <td class="text-success">19,000</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>S-SAVE-0031</td>
                                    <td>02-03-2023</td>
                                    <td><img width="40px" height="40px" src="images/icons/standard-savings-icon.svg"
                                            alt=""></td>
                                    <td class="text-danger">816,927</td>
                                    <td><span class="badge badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>S-SAVE-0501</td>
                                    <td>02-03-2023</td>
                                    <td><img width="40px" height="40px" src="images/icons/standard-savings-icon.svg"
                                            alt=""></td>
                                    <td class="text-danger">20,000</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>S-SAVE-0641</td>
                                    <td>02-02-2023</td>
                                    <td><img width="40px" height="40px" src="images/icons/standard-savings-icon.svg"
                                            alt=""></td>
                                    <td class="text-success">94,250</td>
                                    <td><span class="badge badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>S-SAVE-0482</td>
                                    <td>26-02-2023</td>
                                    <td><img width="40px" height="40px" src="images/icons/standard-savings-icon.svg"
                                            alt=""></td>
                                    <td class="text-success">20,000</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Wallet Transaction History -->
<div class="modal fade" id="walletTransactionHistoryModal" tabindex="-1" role="dialog"
    aria-labelledby="transactionHistoryModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg width="22" height="22" class="close-icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="modal-body receipt pt-0">
                <div class="content-wrap">
                    <div class="content-title mb-2">Wallet Transaction History</div>
                    <div class="content-overline"> <span class="content-overline-text"> 01 Mar, 2023 - 23 Mar,
                            2023</span> </div>
                </div>
                <a href="user-profile.html">
                    <div class="media d-flex flex-column justify-content-center align-items-center mb-3">
                        <img class="mb-3 rounded-circle mr-0" src="images/avatar-3.png" width="55" height="55" alt="">
                        <div class="media-body d-flex flex-column justify-content-center align-items-center">
                            <h4 class="mb-1">Mirabel Chinwe</h4>
                            <h5><b>Wallet Balance: </b>&#8358;<span class="text">200,000</span>
                            </h5>
                        </div>
                    </div>
                </a>
                <div class="transaction-table users-data-table">
                    <div class="table-responsive">
                        <table class="table mb-0 table-responsive-sm">
                            <thead class="users-data-table-head-container">
                                <tr role="row">
                                    <th rowspan="1" colspan="1">S/N</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149.078px;">
                                        Transaction ID</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 191.906px;">
                                        Transaction Date</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 185.062px;">
                                        Amount
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 185.062px;">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>S-SAVE-0001</td>
                                    <td>02-03-2023</td>
                                    <td class="text-danger">20,000</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>S-SAVE-04091</td>
                                    <td>01-02-2023</td>
                                    <td class="text-success">1,850</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>S-SAVE-0021</td>
                                    <td>10-03-2023</td>
                                    <td class="text-success">15,280</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>S-SAVE-0096</td>
                                    <td>24-02-2023</td>
                                    <td class="text-danger">110,000</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>S-SAVE-0490</td>
                                    <td>10-03-2023</td>
                                    <td class="text-success">200,000</td>
                                    <td><span class="badge badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>S-SAVE-0034</td>
                                    <td>02-01-2023</td>
                                    <td class="text-success">19,000</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>S-SAVE-0031</td>
                                    <td>02-03-2023</td>
                                    <td class="text-danger">816,927</td>
                                    <td><span class="badge badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>S-SAVE-0501</td>
                                    <td>02-03-2023</td>
                                    <td class="text-danger">20,000</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>S-SAVE-0641</td>
                                    <td>02-02-2023</td>
                                    <td class="text-success">94,250</td>
                                    <td><span class="badge badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>S-SAVE-0482</td>
                                    <td>26-02-2023</td>
                                    <td class="text-success">20,000</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add New User -->
<div class="modal fade" id="add-new-user" tabindex="-1" role="dialog" aria-labelledby="add-new-user-label"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mb-0">Add new user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="form-group">
                        <label class="form-control-label" for="select_user_role">User Type</label>
                        <select class="form-control" id="select_user_role">
                            <option disabled selected>Select user type</option>
                            <option>Customer</option>
                            <option>Super Admin</option>
                            <option>Admin</option>
                            <option>Staff</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="mb-2" for="first_name">First Name</label>
                                <input type="text" class="form-control" placeholder="" name="first_name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="mb-2" for="last_name">Last Name</label>
                                <input type="text" class="form-control" placeholder="" name="last_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="mb-2" for="email">Email Address</label>
                                <input type="text" class="form-control" placeholder="" name="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="mb-2" for="phone_number">Phone No.</label>
                                <input type="text" class="form-control" placeholder="" name="phone_number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-2" for="dob">Date of Birth</label>
                                <input type="date" class="form-control" placeholder="" name="dob">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-2" for="address">Address</label>
                                <input type="text" class="form-control" placeholder="" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-2" for="state">State</label>
                                <input type="text" class="form-control" placeholder="" name="state">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-2" for="country">Country</label>
                                <input type="text" class="form-control" placeholder="" name="country">
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 mt-2">
                        <button type="submit" class="btn btn-md btn-secondary">Create new user</button>
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Edit Profile -->
<div class="modal fade" id="edit-profile-modal" tabindex="-1" role="dialog" aria-labelledby="edit-profile-modal-label"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mb-0">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="mb-2" for="first_name">First Name</label>
                                <input type="text" class="form-control" placeholder="" name="first_name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="mb-2" for="last_name">Last Name</label>
                                <input type="text" class="form-control" placeholder="" name="last_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="mb-2" for="email">Email Address</label>
                                <input type="text" class="form-control" placeholder="" name="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="mb-2" for="phone_number">Phone No.</label>
                                <input type="text" class="form-control" placeholder="" name="phone_number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-2" for="dob">Date of Birth</label>
                                <input type="date" class="form-control" placeholder="" name="dob">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-2" for="address">Address</label>
                                <input type="text" class="form-control" placeholder="" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-2" for="state">State</label>
                                <input type="text" class="form-control" placeholder="" name="state">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-2" for="country">Country</label>
                                <input type="text" class="form-control" placeholder="" name="country">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center mb-2 mt-2">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-md btn-secondary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Create New Notification -->
<div class="modal fade" id="create-new-notification-modal" tabindex="-1" role="dialog"
    aria-labelledby="create-new-notification-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mb-0">Send New Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="form-group">
                        <label class="form-control-label" for="select_user_role">Select Recipient</label>
                        <select class="form-control" id="select_user_role">
                            <option disabled selected>User Type</option>
                            <option>All Users</option>
                            <option>Admin Users</option>
                            <option>Customer Users</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="mb-2" for="first_name">Subject</label>
                                <input type="text" class="form-control" placeholder="" name="notification_subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="mb-2" for="last_name">Message</label>
                                <div class="d-flex flex-column justify-content-center w-100"
                                    style="border: 1px solid #bcc3d2; border-radius:5px;">
                                    <div class="notification-message-toolbar">
                                        <button type="button" onclick="applyFieldStyles('bold')"><i
                                                class="fa-solid fa-bold"></i></button>
                                        <button type="button" onclick="applyFieldStyles('italic')"><i
                                                class="fa-solid fa-italic"></i></button>
                                        <button type="button" onclick="applyFieldStyles('underline')"><i
                                                class="fa-solid fa-underline"></i></button>
                                    </div>
                                    <div contenteditable="true" id="notification-message-field">Enter text here</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center mb-2 mt-2">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-md btn-secondary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- View Notification -->
<div class="modal fade" id="view-notification-modal" tabindex="-1" role="dialog"
    aria-labelledby="view-notification-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mb-0">View Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <a href="user-profile.html">
                            <h5>Sender:</h5>
                            <div class="media d-flex flex-column justify-content-center align-items-center mb-3">
                                <img class="mb-3 rounded-circle mr-0" src="images/avatar-1.png" width="55" height="55"
                                    alt="">
                                <div class="media-body">
                                    <h4 class="mb-0">Daniella Kelly</h4>
                                </div>
                                <div><span class="badge badge-super-admin">Super Admin</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-2" for="last_name">Date</label>
                            <input type="text" disabled class="form-control" value="02-03-2023">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-2" for="first_name">Notification ID</label>
                            <input type="text" disabled readonly class="form-control" value="N-01863">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-2" for="first_name">Receivers</label>
                            <input type="text" disabled readonly class="form-control" value="All Users">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-2" for="first_name">Subject</label>
                            <input type="text" disabled readonly class="form-control" value="Happy New Month!">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-2" for="first_name">Message</label>
                            <textarea disabled
                                class="form-control">We Wish you a happy new month and a better experience with us. May the best this month has for you be unleashed to you. Get 10% discount on any utility you pay from in the next 24 hours 🤗</textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center mb-2 mt-2">
                    <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>