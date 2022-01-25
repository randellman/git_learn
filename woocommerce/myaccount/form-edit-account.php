<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); 

$months = array(
    'january' => 'January',
    'february' => 'February',
    'march' => 'March',
    'april' => 'April',
    'may' => 'May',
    'june' => 'June',
    'july' => 'July',
    'august' => 'August',
    'september' => 'September',
    'october' => 'October',
    'november' => 'November',
    'december' => 'December',
);

if(false) {
?>

<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="account_first_name"><?php esc_html_e( 'First name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" />
	</p>
	<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
		<label for="middle_name"><?php esc_html_e( 'Middle name', 'woocommerce' ); ?></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="middle_name" id="middle_name" autocomplete="family-name" value="<?php echo esc_attr( $user->middle_name ); ?>" />
	</p>
	<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
		<label for="account_last_name"><?php esc_html_e( 'Last name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="middle-name" value="<?php echo esc_attr( $user->last_name ); ?>" />
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_display_name"><?php esc_html_e( 'Display name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" /> 
		<span><em><?php esc_html_e( 'This will be how your name will be displayed in the account section and in reviews', 'woocommerce' ); ?></em></span>
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label><?php esc_html_e( 'Gender', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<span><em><?php esc_html_e( '(Gender can be edited only once.)', 'woocommerce' ); ?></em></span>

		<input type="radio" class="woocommerce-Input woocommerce-Input--text input-text" name="gender" id="account_gender_male" value="male" <?php checked( 'male', $user->gender ); ?> /> 
		<label for="account_gender_male"><?php esc_html_e( 'Male', 'woocommerce' ); ?></label>
		<input type="radio" class="woocommerce-Input woocommerce-Input--text input-text" name="gender" id="account_gender_feemale" value="feemale" <?php checked( 'feemale', $user->gender ); ?> /> 
		<label for="account_gender_feemale"><?php esc_html_e( 'Feemale', 'woocommerce' ); ?></label>
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label><?php esc_html_e( 'Birthday', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<span><em><?php esc_html_e( '(Birthday can be edited only once. You can enjoy the birthday privileges on your birthday.)', 'woocommerce' ); ?></em></span>

		<select name="birthday[month]" id="birthday[month]">
			<?php foreach($months as $key => $val) { ?>
			<option value="<?= $key ?>" <?php selected( $val, $user->birthday['month'] ); ?>><?= $val ?></option>
			<?php } ?>
		</select>

		<select name="birthday[date]" id="birthday[date]">
			<?php for($i = 1; $i <= 31; $i++) { ?>
			<option value="<?= $i ?>" <?php selected( $i, $user->birthday['date'] ); ?>><?= $i ?></option>
			<?php } ?>
		</select>

		<select name="birthday[year]" id="birthday[year]">
			<?php for($i = 1930; $i <= date('Y'); $i++) { ?>
			<option value="<?= $i ?>" <?php selected( $i, $user->birthday['year'] ); ?>><?= $i ?></option>
			<?php } ?>
		</select>
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="country"><?php esc_html_e( 'Country', 'woocommerce' ); ?></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="country" id="country" autocomplete="country" value="<?php echo esc_attr( $user->country ); ?>" />
	</p>

	<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
		<label for="language"><?php esc_html_e( 'Language', 'woocommerce' ); ?></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="language" id="language" autocomplete="language" value="<?php echo esc_attr( $user->language ); ?>" />
	</p>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="currency"><?php esc_html_e( 'Currency', 'woocommerce' ); ?></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--email input-text" name="currency" id="currency" autocomplete="currency" value="<?php echo esc_attr( $user->currency ); ?>" />
	</p>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" />
	</p>

	<fieldset>
		<legend><?php esc_html_e( 'Password change', 'woocommerce' ); ?></legend>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_current"><?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_1"><?php esc_html_e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_2"><?php esc_html_e( 'Confirm new password', 'woocommerce' ); ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off" />
		</p>
	</fieldset>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<p>
		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
		<button type="submit" class="woocommerce-Button button" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
		<input type="hidden" name="action" value="save_account_details" />
	</p>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>

<?php } ?>
<div class="link__account">
    <a>Account Details</a>
</div>
<div class = "right-side">
    <form action method = "POST">
    <div class="acc-detalis">
        <div class="three-input">
            <div class="acc-input">
                <h4>First Name<span>*</span></h4>
                <input type="text" placeholder="StoreApps">
            </div>
            <div class="acc-input">
                <h4>Middle Name</h4>
                <input type="text">
            </div>
            <div class="acc-input">
                <h4>Last Name<span>*</span></h4>
                <input type="text" placeholder="Demo">  
            </div>
        </div>
        <div class="one-input">
            <h4>Display name<span>*</span></h4>
            <input type="text" placeholder="StoreApps Demo">
            <p>This will be how your name will be displayed in the account section and in reviews</p>
        </div>
        <div class="acc_radio-btn">
            <h4>Gender<span>*</span></h4>
            <p>(Gender can be edited only once.)</p>
            <div class="radio-btn">
                <div class="btn_radio">
                    <input id="radio-1" type="radio" name="radio" value="1">
                    <label for="radio-1">Male</label>
                </div>
                <div class="btn_radio">
                    <input id="radio-2" type="radio" name="radio" value="2">
                    <label for="radio-2">Female</label>
                </div>
            </div>
        </div>
        <div class="acc_radio-btn">
            <h4>Birthday<span>*</span></h4>
            <div class = "three-input three-select">
                <select class = "select">
                    <option>January</option>
                    <option>January</option>
                    <option>January</option>
                </select>
                <select class = "select">
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                </select>
                <select class = "select">
                    <option>2021</option>
                    <option>2020</option>
                    <option>2019</option>
                </select>
            </div>
            <p>(Birthday can be edited only once. You can enjoy the birthday privileges on your birthday.)</p>
        </div>
        <div class="three-input">
            <div class="acc-input">
                <h4>Country</h4>
                <input type="text" placeholder="United states">
            </div>
            <div class="acc-input">
                <h4>Language</h4>
                <input type="text" placeholder="English">
            </div>
            <div class="acc-input">
                <h4>Currency</h4>
                <input type="text" placeholder="US $">
            </div>
        </div>
        <div class="one-input">
            <h4>Email Address<span>*</span></h4>
            <input type="text" placeholder="john.smith@mailinator.com">
            <p>This will be how your name will be displayed in the account section and in reviews</p>
        </div>
        <div class="one-input">
            <h2>Password Change</h2>
            <h4>Current password (leave blank to leave unchanged)</h4>
            <input type="text">
        </div>
        <div class="one-input">
            <h4>New Password (leave blank to leave unchanged)</h4>
            <input type="text">
        </div>
        <div class="one-input">
            <h4>Confirm new password</h4>
            <input type="text" placeholder="StoreApps Demo">
        </div>
        <div class="acc-btn">
            <button type = "submit" class="btn btn-gradient">Save Changes</button>
        </div>
    </div>
    </form>
</div>
<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
