@include('css-js.course-footerjs')
@include('css-js.coursecss')
@include('css-js.coursecss1')


<!DOCTYPE html>
<html>

<head>
    @section('styles')
    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }
        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
    @endsection
</head>

<body>
                @if(session('message'))
                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    @endif
                    @if(session('error'))
                      <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                    @endif

                    
    <form method="POST" action="{{ route('products.purchase', $datas->id) }}" class="card-form mt-3 mb-3">
            @csrf
            <input type="hidden" name="payment_method" class="payment-method">
            <input class="StripeElement mb-3" name="card_holder_name" placeholder="Card holder name" required>
            <div class="col-lg-4 col-md-6">
                <div id="card-element"></div>
            </div>
            <div id="card-errors" role="alert"></div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary pay">
                    Purchase
                </button>
            </div>
        </form>

    
    
        

        
        @section('scripts')
            <script src="https://js.stripe.com/v3/"></script>
            <script>
                let stripe = Stripe("{{ env('STRIPE_KEY') }}")
                let elements = stripe.elements()
                let style = {
                    base: {
                        color: '#32325d',
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4'
                        }
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a'
                    }
                }
                let card = elements.create('card', {style: style})
                card.mount('#card-element')
                let paymentMethod = null
                $('.card-form').on('submit', function (e) {
                    $('button.pay').attr('disabled', true)
                    if (paymentMethod) {
                        return true
                    }
                    stripe.confirmCardSetup(
                        "{{ $intent->client_secret }}",
                        {
                            payment_method: {
                                card: card,
                                billing_details: {name: $('.card_holder_name').val()}
                            }
                        }
                    ).then(function (result) {
                        if (result.error) {
                            $('#card-errors').text(result.error.message)
                            $('button.pay').removeAttr('disabled')
                        } else {
                            paymentMethod = result.setupIntent.payment_method
                            $('.payment-method').val(paymentMethod)
                            $('.card-form').submit()
                        }
                    })
                    return false
                })
            </script>
</body>
</html>


  <input type="hidden" name="formID" value="212501331519848" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
   
    <style>
      .formLogoWrapper { display:inline-block; position: absolute; width: 100%;} .form-all:before { background: none !important;} .formLogoWrapper.Center { top: -310px; text-align: center;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_28" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_28" class="form-header" data-component="header">
              Course Payment
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_29" data-compound-hint="Frist Name,Last Name">
        <label class="form-label form-label-top" id="label_29" for="first_29">
          Full Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_29" class="form-input-wide jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_29" name="q29_fullName[first]" class="form-textbox validate[required]" size="10" value="" placeholder="Frist Name" data-component="first" aria-labelledby="label_29" required="" />
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_29" name="q29_fullName[last]" class="form-textbox validate[required]" size="15" value="" placeholder="Last Name" data-component="last" aria-labelledby="label_29" required="" />
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_30">
        <label class="form-label form-label-top" id="label_30" for="input_30">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_30" class="form-input-wide jf-required" data-layout="half">
          <input type="email" id="input_30" name="q30_email30" class="form-textbox validate[required, Email]" style="width:310px" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_30" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_25">
        <label class="form-label form-label-top" id="label_25" for="input_25_full">
          Phone Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="tel" id="input_25_full" name="q25_phoneNumber25[full]" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" style="width:310px" data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_25" required="" />
            <label class="form-sub-label is-empty" for="input_25_full" id="sublabel_25_masked" style="min-height:13px" aria-hidden="false">  </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_39">
        <label class="form-label form-label-top form-label-auto" id="label_39" for="input_39_addr_line1"> Address </label>
        <div id="cid_39" class="form-input-wide" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_39_addr_line1" name="q39_address[addr_line1]" class="form-textbox form-address-line" value="" data-component="address_line_1" aria-labelledby="label_39 sublabel_39_addr_line1" required="" />
                  <label class="form-sub-label" for="input_39_addr_line1" id="sublabel_39_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_39_addr_line2" name="q39_address[addr_line2]" class="form-textbox form-address-line" value="" data-component="address_line_2" aria-labelledby="label_39 sublabel_39_addr_line2" />
                  <label class="form-sub-label" for="input_39_addr_line2" id="sublabel_39_addr_line2" style="min-height:13px" aria-hidden="false"> Street Address Line 2 </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_39_city" name="q39_address[city]" class="form-textbox form-address-city" value="" data-component="city" aria-labelledby="label_39 sublabel_39_city" required="" />
                  <label class="form-sub-label" for="input_39_city" id="sublabel_39_city" style="min-height:13px" aria-hidden="false"> City </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_39_state" name="q39_address[state]" class="form-textbox form-address-state" value="" data-component="state" aria-labelledby="label_39 sublabel_39_state" required="" />
                  <label class="form-sub-label" for="input_39_state" id="sublabel_39_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_39_postal" name="q39_address[postal]" class="form-textbox form-address-postal" value="" data-component="zip" aria-labelledby="label_39 sublabel_39_postal" required="" />
                  <label class="form-sub-label" for="input_39_postal" id="sublabel_39_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li id="cid_41" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_41" class="form-header" data-component="header">
              course
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_43">
        <div id="cid_43" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_43" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
@include('css-js.coursejs')