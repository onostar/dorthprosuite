<div id="chat_page">
    <!-- start chat -->
    <div id="start_chat">
        
    </div>
    <!-- users -->
    <div id="chat">
        <div class="chat_icon" title="Live chat">
            <a href="javascript:void(0)" onclick="showUsers()" class="live_box" title="Live chat"><i class="fas fa-commenting"></i></a> 
        </div>
        <div class="chat_message">
            <div class="chat_header">
                <h2>Live Chat <i class="far fa-comment"></i></h2>
                <a href="javascript:void(0)" onclick="closeChat();"><i class="fas fa-close"></i></a>
            </div>
            <div class="all_chat">
                <div id="chat1">
                    <div class="main_chats">
                        <div class="sender">
                            <i class="fas fa-microphone"></i>
                            <!-- <p>Agent</p> -->
                        </div>
                        <p class="chats">Hi. Welcome to live chat<br>Click on a user to start a conversation</p>
                        
                    </div>
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
                
            </div>
            <section id="chat_box" method="POST">
                <input type="text" name="messages" id="messages" placeholder="Type your message here">
                <input type="hidden" name="recipient" id="recipient"value="<?php echo $recipient?>">
                <input type="hidden" name="sender" id="sender" value="<?php echo $user_id?>">
                <button type="submit" id="submit_chat" name="submit_chat" title="Send" onclick="sendChat()"><i class="fas fa-paper-plane"></i></button>
            
            </section>  
            
        </div>
    </div>

</div>
