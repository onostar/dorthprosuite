<?php
    session_start();
    include "../classes/dbh.php";
    include "../classes/select.php";
    $user_id = $_SESSION['user_id'];
?>
    <div class="chat_msg">
            
            <?php
                if(isset($_GET['recipient'])){
                    $recipient = $_GET['recipient'];
                    $sender = $user_id;
                    //get recipient details
                    $get_rec = new selects();
                    $recs = $get_rec->fetch_details_group('users', 'full_name', 'user_id', $recipient);
                    $rec_name = $recs->full_name;
            ?>
            <div class="chat_header">
                <h2><i class="far fa-comment"></i> Chat with <?php echo $rec_name?></h2>
                <a href="javascript:void(0)" onclick="closeLiveChat();"><i class="fas fa-close"></i></a>
            </div>

            <div id="chat2" class="chat2">
                <?php
                    $get_chats = new selects();
                    $chats = $get_chats->fetch_chats($sender, $recipient);
                    if(gettype($chats) == 'array'){
                        foreach($chats as $chat):
                ?>
                <div class="main_chats">
                    
                    <?php if($chat->sender == $user_id){?>
                    <div class="sender_chats">
                        <p><?php echo $chat->message?><br><span style="color:rgb(238, 238, 238);; font-size:.rem; float:right"><?php echo date("M jS, h:ia", strtotime($chat->chat_time))?></span></p>
                    </div>
                    <?php }else{?>
                    <div class="reply_chats">
                        <p><?php echo $chat->message?><br><span style="color:rgb(238, 238, 238);; font-size:.rem; float:left"><?php echo date("M jS, h:ia", strtotime($chat->chat_time))?></span></p>
                    </div>
                    <?php }?>
                </div>
                <?php endforeach; }?>
            </div>
        <section id="chat_box">
            <input type="text" name="messages" id="messages" placeholder="Type your message here">
            <input type="hidden" name="recipient" id="recipient"value="<?php echo $recipient?>">
            <input type="hidden" name="sender" id="sender" value="<?php echo $user_id?>">
            <button type="submit" id="submit_chat" name="submit_chat" title="Send" onclick="sendChat()"><i class="fas fa-paper-plane"></i></button>
        
        </section>  
        <?php }?>
    </div>
    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
    