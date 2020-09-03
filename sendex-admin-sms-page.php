<h2> <?php esc_attr_e( 'Send message easily', 'WpAdminStyle' ); ?></h2>
<div class="wrap">
    <div class="metabox-holder columns-2">
        <div class="meta-box-sortables ui-sortable">
            <div class="postbox">
                <h2 class="hndle">
                    <span> <?php esc_attr_e( 'SEND SMS', 'WpAdminStyle' ); ?></span>
                </h2>
                <div class="inside">
                    <form method="post" name="cleanup_options" action="">
                        <input type="text" name="sender" class="regular-text" placeholder="Sender ID" required /><br><br>
                        <input type="text" name="numbers" class="regular-text" placeholder="+2348059794251" required /><br><br>
                        <textarea name="message" cols="50" rows="7" placeholder="Message"></textarea><br><br>
                        <input class="button-primary" type="submit" value="SEND MESSAGE" name="send_sms_message" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
