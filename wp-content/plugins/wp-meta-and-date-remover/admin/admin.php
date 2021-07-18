
<div id="pluginmodel" style="display:none" class=" fixed z-10 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-15 w-15 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
            <!-- Heroicon name: exclamation -->
            <svg class="h-12" xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill:green" viewBox="0 0 24 24"><path d="M14 9v2h-4v-2c0-1.104.897-2 2-2s2 .896 2 2zm10 3c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-8-1h-1v-2c0-1.656-1.343-3-3-3s-3 1.344-3 3v2h-1v6h8v-6z"/></svg>
          </div>
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
              Get Free SSL Certificate
            </h3>
            <div class="mt-2">
              <p class="text-sm leading-5 text-gray-600">
                We have made new plugin to enhance your site security. The plugin will issue SSL certificate for your site for free. This will heavily imporve your SEO and will increase trust for users when they will see green padlock in browser.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          
        <form method="post" action="<?php echo $action_url;?>" >
            <input type="hidden" name="install_ssl" value="1" />
            <?php echo wp_nonce_field('acc_nonce_install_ssl','acc_nonce_field_wpmdr') ?>
    
        
            <button type="button" type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                Install WP Free SSL
            </button>
        </form>
          
        </span>
        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
          <button id="pluginmodelclose" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Not now
          </button>
        </span>
      </div>
    </div>
  </div>
</div>



<div  class="w-full py-8 px-5 bg-white shadow-sm">
    <div class="flex justify-between">
        <div class=" flex">
        <img class="h-10 hidden w-10 mr-2" src="<?php echo plugin_dir_url(__FILE__).'/assets/img/ssl.png'; ?>" />
        <h3 class=" m-auto text-2xl font-semibold text-gray-700" >WP Meta and Date Remover</h3>
        </div>
        <div class=" text-lg">
            <?php if(wmadr_fs()->is_not_paying()){ ?>
                
                <span class="bg-gray-700 text-gray-200 py-1 px-2 rounded-md">Free</span>
            <?php }else{ ?>
                <span class="bg-yellow-700 text-gray-200 py-1 px-2 rounded-md">Premium</span>
            <?php } ?>
            <span class=" text-gray-700">Version:</span> <span class=" text-gray-800">1.9.3</span>
        </div>
    </div>
</div>
<div  class=" mt-5 flex w-full p-5 -pl-5 flex-row">
    <div class=" w-3/4 mr-2 shadow-sm p-4 rounded-sm bg-white">
    
        <div class="bg-white">
            <nav class="flex flex-col sm:flex-row">
                <button onclick="switchtab('#primarysettings')" id="primarysettingsbtn" class="text-gray-600 text-lg py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 border-blue-500 font-medium ">
                    Primary Settings
                </button>
                <button  onclick="switchtab('#contentsettings')" id="contentsettingsbtn" class="<?php if(wmadr_fs()->is_not_paying()){ ?> hidden <?php } ?> text-gray-600 text-lg py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Content Settings
                </button>
                <button onclick="switchtab('#advancedsettings')" id="advancedsettingsbtn" class="text-gray-600 text-lg py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Advanced Settings
                </button>
                <button onclick="switchtab('#customsettings')" id="customsettingsbtn" class="text-gray-600 text-lg py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Custom
                </button>
                <button id="morestuffbtn" onclick="switchtab('#morestuff')" class="text-gray-600 text-lg py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    More Stuff
                </button>
            </nav>
        </div>
        <!-- content -->
        <div class="p-5">
            
            <div  id="primarysettings">
                <form method="post" action="<?php echo $action_url;?>">
					<input type="hidden" name="submitted" value="1" />
					<?php echo wp_nonce_field('acc_nonce_wpmdr','acc_nonce_field_wpmdr') ?>
                    <label class="mt-4 block text-lg text-gray-900">Remove from homepage</label>
                    <p class="mt-2 mb-2 text-gray-700">Your dates and other meta data will be hidden from home page</p>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="wpmdr_from_home" <?php echo (get_option('wpmdr_from_')['home']=="1")?'checked="checked"':''; ?> value="1">
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="wpmdr_from_home"  <?php echo (get_option('wpmdr_from_')['home']=="0")?'checked="checked"':''; ?> value="0">
                        <span class="ml-2">No</span>
                    </label>


                    <label class="mt-8 block text-lg text-gray-900">CSS based removal</label>
                    <p class="mt-2 mb-2 text-gray-700">Plugin will insert CSS code into the pages to hide any unwanted information</p>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" <?php echo (get_option('wpmdr_disable_css')=="0")?'checked="checked"':''; ?>  name="wpmdr_disable_css" value="0">
                        <span class="ml-2">Enable</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" <?php echo (get_option('wpmdr_disable_css')=="1")?'checked="checked"':''; ?>  name="wpmdr_disable_css" value="1">
                        <span class="ml-2">Disable</span>
                    </label>

                    <textarea name="wpmdr_css" placeholder="Insert your css code here" class=" w-full block p-2 mt-5 bg-gray-300 text-gray-800 h-24"><?php echo get_option('wpmdr_css'); ?></textarea>
                    <a href="https://bit.ly/WPFiverr" target="_blank" class="bg-gray-700 hover:text-white hover:shadow-lg mt-1 rounded-sm text-gray-200 p-1">Get help to setup this</a>

                    <label class="mt-8 block text-lg text-gray-900">PHP based removal</label>
                    <p class="mt-2 mb-2 text-gray-700">Plugin will apply php code in backend to prevent dates being added in HTML</p>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" <?php echo (get_option('wpmdr_disable_php')=="0")?'checked="checked"':''; ?> name="wpmdr_disable_php" value="0">
                        <span class="ml-2">Enable</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" <?php echo (get_option('wpmdr_disable_php')=="1")?'checked="checked"':''; ?> name="wpmdr_disable_php" value="1">
                        <span class="ml-2">Disable</span>
                    </label>

                    <button class="py-2 mt-5 right rounded-md shadow-sm block px-4 bg-gray-800 text-gray-100">Save Changes</button>
                </form>
            </div>

            <div  style="display:none" id="contentsettings">
                <form method="post" action="<?php echo $action_url;?>">
					<input type="hidden" name="submitted_content" value="1" />
					<?php echo wp_nonce_field('wpmdr_content_setting','wpmdr_content_setting') ?>
                    <label class="mt-4 block text-lg text-gray-900">Remove date</label>
                    <p class="mt-2 mb-2 text-gray-700">Remove date from selected post types</p>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="wpmdr_remove_date" <?php echo (get_option('wpmdr_remove_date',"1")=="1")?'checked="checked"':''; ?> value="1">
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="wpmdr_remove_date"  <?php echo (get_option('wpmdr_remove_date',"1")=="0")?'checked="checked"':''; ?> value="0">
                        <span class="ml-2">No</span>
                    </label>


                    <label class="mt-8 block text-lg text-gray-900">Remove author</label>
                    <p class="mt-2 mb-2 text-gray-700">Remove author from selected post types</p>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" <?php echo (get_option('wpmdr_remove_author',"1")=="1")?'checked="checked"':''; ?>  name="wpmdr_remove_author" value="1">
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" <?php echo (get_option('wpmdr_remove_author',"1")=="0")?'checked="checked"':''; ?>  name="wpmdr_remove_author" value="0">
                        <span class="ml-2">No</span>
                    </label>

                    
                    
                    <label class="block text-lg text-gray-800 mt-5 mb-2">Note:</label>
                    <p>Every theme if built different way. Plugin may not work completely for your theme. If you face issue of some information left on post of pages like <b><u>By</u></b> <b><u>Posted By</u></b> etc or any icons of comments tags etc</p>
                    <p class="mt-2">Please follow guide in the link below to remove any other leftover text</p>
                    <p><a href="http://bit.ly/wpmdrplugin" target="_blank"><b><u>how to configure this plugin.</u></b></a></p>
                    <div class="mt-5 flex">
                        <button type="submit" class="py-2 mr-2 inline-flex right rounded-md shadow-sm block px-4 bg-gray-800 text-gray-100">Save Changes</button>
                        <button class="py-2 hidden right rounded-md shadow-sm block px-4 bg-yellow-800 text-gray-100">Need Help?</button>
                    </div>
                    
                </form>
            </div>

            <div style="display:none" id="advancedsettings">
                
                <div >
                    <form method="post" action="<?php echo $action_url;?>" >
                        <input type="hidden" name="submitted_pro" value="1" />
                        <?php echo wp_nonce_field('acc_nonce_wpmdr_pro','acc_nonce_field_wpmdr') ?>
                            
                        <label class="mt-4 block text-lg text-gray-900">Individual post setting <?php if(wmadr_fs()->is_not_paying()){ ?> <a href="<?php echo wmadr_fs()->get_upgrade_url(); ?>"><span class="bg-yellow-700 text-gray-200 text-sm py-1 px-1 rounded-md">Premium</span></a> <?php } ?> </label>
                        <p class="mt-2 mb-2 text-gray-700">Control Meta and Date for individual post</p>
                        
                        <label class="inline-flex items-center">
                            <input type="radio" <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> class="form-radio" name="wpmdr_individual_post" <?php echo (get_option( 'wpmdr_individual_post' )==1)?'checked="checked"':''; ?> value="1">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> name="wpmdr_individual_post" <?php echo (get_option( 'wpmdr_individual_post' )==0)?'checked="checked"':''; ?> value="0">
                            <span class="ml-2">No</span>
                        </label>
                        <p class="mt-2 mb-2 text-gray-700">Default setting for individual post <?php if(wmadr_fs()->is_not_paying()){ ?> <a href="<?php echo wmadr_fs()->get_upgrade_url(); ?>"><span class="bg-yellow-700 text-gray-200 text-sm py-1 px-1 rounded-md">Premium</span></a> <?php } ?> </p>
                        
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> name="wpmdr_individual_post_default" <?php echo (get_option( 'wpmdr_individual_post_default' )==1)?'checked="checked"':''; ?>  value="1">
                            <span class="ml-2">Enabled</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> name="wpmdr_individual_post_default" <?php echo (get_option( 'wpmdr_individual_post_default' )==2)?'checked="checked"':''; ?> value="2">
                            <span class="ml-2">Disabled</span>
                        </label>


                        <label class="mt-8 block text-lg text-gray-900">Exclude Categories <?php if(wmadr_fs()->is_not_paying()){ ?> <a href="<?php echo wmadr_fs()->get_upgrade_url(); ?>"><span class="bg-yellow-700 text-gray-200 text-sm py-1 px-1 rounded-md">Premium</span></a> <?php } ?> </label>
                        <p class="mt-2 mb-2 text-gray-700">Choose categories to exclude for removing the meta data and date</p>
                        <?php 
                            $categories = get_categories(array('hide_empty' => 0 )); 
                            $excluded_categories = get_option('wpmdr_excluded_categories');
                        ?>
                        <select <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> style="height:200px" name="excluded_categories[]" class=" p-2 form-multiselect block w-full mt-1" multiple>
                            <?php foreach($categories as $category) { ?>
                                <option name="<?php echo "cat_".$category->slug; ?>" <?php if(in_array($category->term_id,$excluded_categories)) echo "selected='selected'"; ?>  id="<?php echo $category->slug; ?>" value="<?php echo $category->term_id; ?>">
                                    <?php echo $category->name; ?>
                                </option>
                            <?php } ?>
                        </select>

                        <label class="mt-8 block text-lg text-gray-900">Targeted Post Types <?php if(wmadr_fs()->is_not_paying()){ ?> <a href="<?php echo wmadr_fs()->get_upgrade_url(); ?>"><span class="bg-yellow-700 text-gray-200 text-sm py-1 px-1 rounded-md">Premium</span></a> <?php } ?> </label>
                        <p class="mt-2 mb-2 text-gray-700">Choose post types which should be targeted by plugin</p>
                        <?php 
                            $custom_types = get_post_types(array('public'   => true,'_builtin' => false));
                            $builtin_types = get_post_types(array('public'   => true,'_builtin' => true));
                            $post_types = array_merge($builtin_types,$custom_types);
                            $selected_post_types = get_option('wpmdr_included_post_types');
                        ?>
                        <select <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> style="height:200px" name="targeted_postypes[]" class=" p-2 form-multiselect block w-full mt-1" multiple>
                            <?php foreach($post_types as $type) { ?>
                                <option name="<?php echo "type_".$type; ?>" <?php if(in_array($type,$selected_post_types)) echo "selected='selected'"; ?>  id="<?php echo $type; ?>" value="<?php echo $type; ?>">
                                    <?php echo $type; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <label class="mt-8 block text-lg text-gray-900">YoastSEO Schema Fix <?php if(wmadr_fs()->is_not_paying()){ ?> <a href="<?php echo wmadr_fs()->get_upgrade_url(); ?>"><span class="bg-yellow-700 text-gray-200 text-sm py-1 px-1 rounded-md">Premium</span></a> <?php } ?> </label>
                        <p class="mt-2 mb-2 text-gray-700">Remove date from yoast schema. Clear all types of cache for changes to take effect</p>
                        <label class="inline-flex items-center">
                            <input type="checkbox" <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> class="form-radio" name="wpmdr_yoast_datepublished" <?php echo (get_option( 'wpmdr_yoast_datepublished',0 )==1)?'checked="checked"':''; ?> value="1">
                            <span class="ml-2">Remove datePublisted</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="checkbox" class="form-radio" <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> name="wpmdr_yoast_dateupdated" <?php echo (get_option( 'wpmdr_yoast_dateupdated' ,0)==1)?'checked="checked"':''; ?> value="1">
                            <span class="ml-2">Remove dateModified</span>
                        </label>
                        
                        <label class="mt-8 block text-lg text-gray-900">Targeted Post Age <?php if(wmadr_fs()->is_not_paying()){ ?> <a href="<?php echo wmadr_fs()->get_upgrade_url(); ?>"><span class="bg-yellow-700 text-gray-200 text-sm py-1 px-1 rounded-md">Premium</span></a> <?php } ?> </label>
                        <p class="mt-2 mb-2 text-gray-700">Hide date and meta based on how old the post is.</p>
                        <div>
                            <input <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> type="number"  value="<?php echo get_option('wpmdr_post_age',-1); ?>" name="wpmdr_post_age"  />
                            <label class="text-lg text-gray-800">Days(-1 will disable this option)</label>
                        </div>
                        <label class="hidden text-gray-700 mt-4">Date and meta will be removed from posts created before 20th September 2020</label>

                        <label class="mt-4 block text-lg text-yellow-800">Debug Mode <?php if(wmadr_fs()->is_not_paying()){ ?> <a href="<?php echo wmadr_fs()->get_upgrade_url(); ?>"><span class="bg-yellow-700 text-gray-200 text-sm py-1 px-1 rounded-md">Premium</span></a> <?php } ?> </label>
                        <p class="mt-2 mb-2 text-gray-700">Shows debug information about your settings. Shows only for admins</p>
                        
                        <label class="inline-flex items-center">
                            <input type="radio" <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> class="form-radio" name="wpmdr_debug_info" <?php echo (get_option( 'wpmdr_debug_info' )==1)?'checked="checked"':''; ?> value="1">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" <?php if(wmadr_fs()->is_not_paying()) echo "disabled"; ?> name="wpmdr_debug_info" <?php echo (get_option( 'wpmdr_debug_info' )==0)?'checked="checked"':''; ?> value="0">
                            <span class="ml-2">No</span>
                        </label>


                        <button type="submit" class="py-2 mt-5 right rounded-md shadow-sm block px-4 bg-gray-800 text-gray-100">Save Changes</button>
                    </form>
                </div>
                
                <!--- marketing content -->
                <?php if(wmadr_fs()->is_not_paying()){ ?>
                <div  class="w-full flex flex-col">
                    <span class="text-2xl m-auto m-5 mt-10 mb-8  text-gray-600 font-medium">Upgrade to premium to unlock all</span>
                    <div class="flex flex-row">
                            <div class="  flex flex-col justify-center w-1/3 p-8">
                                <span class="mb-4 text-lg font-medium text-gray-700">Individual post setting</span>
                                <img class="mr-16" style="height:180px" src="<?php echo plugin_dir_url( __FILE__ ) . '/img/post_single.svg' ?>" />
                                <p class="mt-4 text-base text-gray-800">Control Meta and Date for individual post</p>
                            </div>
                            <div class="flex flex-col justify-center w-1/3 p-8">
                                <span class="mb-8 text-lg font-medium text-gray-700">Category wise control</span>
                                <img src="<?php echo plugin_dir_url( __FILE__ ) . '/img/category.svg' ?>" />
                                <p class="mt-4 text-base text-gray-800">Choose categories to exclude for removing the meta data and date</p>
                            </div>
                            <div class="flex flex-col justify-center w-1/3 p-8">
                                <span class="mb-4 text-lg font-medium text-gray-700">Custom Post Type</span>
                                <img src="<?php echo plugin_dir_url( __FILE__ ) . '/img/post_type.svg' ?>" />
                                <p class="mt-4 text-base text-gray-800">Choose post types which should be targeted by plugin</p>
                            </div>
                    </div>

                    <div class="flex w-full justify-center flex-row ">
                            <a class="py-3 flex flex-row text-lg align-middle hover:text-gray-100 shadow-md rounded-md px-10 bg-yellow-700 text-gray-100" href="<?php echo wmadr_fs()->get_upgrade_url(); ?>">
                                <svg class="mr-2" style="fill:white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 16l-3-10 7.104 4 4.896-8 4.896 8 7.104-4-3 10h-18zm0 2v4h18v-4h-18z"/></svg> 
                                Upgrade now
                            </a>
                    </div>

                </div>
                <?php } ?>
                <!--marketing content end -->

            </div>

            <div style="display:none"  class=" flex   flex-col" id="customsettings">
                <span class="text-2xl  mt-5  mt-10  text-gray-600 font-medium">Custom integration in your theme</span>
                <p class="mt-4 w-full  text-base text-gray-600">
                    If your theme has some special/different data showing up you can use this feature to remove that using this feature
                    <br>You need little bit of coding experience to put this in your theme
                </p>
                <pre class="p-4 mt-4 bg-gray-400">
                        &lt;?php if(wpmdr_custom_hide()){ ?&gt;

                            //the part that you want to remove

                        &lt;?php } ?&gt;
                </pre>
                <form method="post" action="<?php echo $action_url;?>">
                    <input type="hidden" name="submitted_custom" value="1" />
                    <?php echo wp_nonce_field('wpmdr_custom_setting','wpmdr_custom_setting') ?>
                    
                    <label class="mt-8 block text-lg text-gray-900">Turn on custom integration</label>
                    <p class="mt-2 mb-2 text-gray-700">Turning this will remove everything put in between above code block</p>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" <?php echo (get_option('wpmdr_custom_hide',"1")=="1")?'checked="checked"':''; ?>  name="wpmdr_custom_hide" value="1">
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" <?php echo (get_option('wpmdr_custom_hide',"1")=="0")?'checked="checked"':''; ?>  name="wpmdr_custom_hide" value="0">
                        <span class="ml-2">No</span>
                    </label>
                    
                    <div class="mt-5 flex">
                            <button type="submit" class="py-2 mr-2 inline-flex right rounded-md shadow-sm block px-4 bg-gray-800 text-gray-100">Save Changes</button>
                            <a href="https://bit.ly/WPFiverr" target="_blank" class="py-2 right rounded-md shadow-sm block px-4 bg-yellow-800 text-gray-100">Need Help?</a>
                    </div>
                </form>

                <div class="mt-5">
                    <label class="mt-8 block text-lg text-gray-900">Example</label>  
                    <pre class="p-4 mt-4 bg-gray-400">
&lt;?php if(wpmdr_custom_hide()){ ?&gt;
&lt;label&gt;This is demo content visible since you have turned off custom setting to &quot;No&quot;&lt;/label&gt;
&lt;?php } ?&gt;
                    </pre>
                            
                    <?php if(wpmdr_custom_hide()){ ?>
                        <label>This is demo content visible since you have turned off custom setting to "No"</label>
                    <?php } ?>


                </div>
            </div>

            <div style="display:none"  class=" flex justify-center  flex-col" id="morestuff">
                <span class="text-2xl m-auto m-5  mt-10  text-gray-600 font-medium">Free SSL certificate for your site</span>
                <div class=" flex flex-col justify-center p-8">
                    <img style="height:400px" src="<?php echo plugin_dir_url( __FILE__ ) . '/img/security.svg' ?>">
                </div>
                <p class="m-4 w-full text-center text-base text-gray-600">We have created plugin to make your site secure.<br>Click on button below to install plugin automatically and then your are ready to get your free SSL certificate</p>
                
                <div class="flex w-full justify-center flex-row ">
                        <?php if(!is_plugin_active('wp-free-ssl/wp-free-ssl.php')){ ?> 
                            
                            <form method="post" action="<?php echo $action_url;?>" >
                                <input type="hidden" name="install_ssl" value="1" />
                                <?php echo wp_nonce_field('acc_nonce_install_ssl','acc_nonce_field_wpmdr') ?>
                        
                            
                                <button class="py-4 flex flex-row text-lg align-middle hover:text-gray-100 shadow-md rounded-md px-5 bg-green-700 text-gray-100" type="submit">
                                    <svg style="fill:white" class="mr-2" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M8 11h-6v10h20v-10h-6v-2h8v14h-24v-14h8v2zm5 2h4l-5 6-5-6h4v-12h2v12z"/></svg>
                                    Install plugin now (Official source)
                                </button>
                            </form>
                        <?php }else{ ?>
                            <a class="py-4 flex flex-row text-lg align-middle hover:text-gray-100 shadow-md rounded-md px-5 bg-green-700 text-gray-100" href="<?php menu_page_url('certificate',true); ?>">
                                Goto WP Free SSL
                            </a>
                        <?php } ?>
                </div>  
            </div>

        </div>


    
    </div>
    <div class=" w-1/4 p-4 shadow-sm flex flex-col justify-center rounded-sm bg-white">
        <?php if(wmadr_fs()->is_not_paying()){ ?>
        <div class="mb-8" >
            <img src="<?php echo plugin_dir_url( __FILE__ ) . '/img/upgrade.svg' ?>" />
            <a href="<?php echo wmadr_fs()->get_upgrade_url(); ?>" class="py-3 mt-2 flex flex-row justify-center text-lg align-middle  rounded-md shadow-sm block px-5 w-full text-gray-200 bg-yellow-600">
                <svg class="mr-2" style="fill:white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 16l-3-10 7.104 4 4.896-8 4.896 8 7.104-4-3 10h-18zm0 2v4h18v-4h-18z"/></svg>                 
                <span class="text-bold text-white">Upgrade Plugin</span>
            </a>
        </div>
        <?php } ?>
        <span class="  text-2xl text-gray-800">Extra</span>
        <div class="flex mt-4 ">
            <a target="_blank" href="https://wordpress.org/support/view/plugin-reviews/wp-meta-and-date-remover?rate=5#postform" class="py-2  text-center hover:text-white rounded-md shadow-sm block px-4 w-1/2 mr-1 bg-green-700 text-gray-100">Vote Up</a>
            <a target="_blank" href="http://bit.ly/PKDonate" class="py-2  text-center hover:text-white rounded-md shadow-sm block px-4 w-1/2 bg-purple-700 text-gray-100">Donate</a>
        
        </div>
        <div class="flex mt-2">
            <a target="_blank" href="https://track.fiverr.com/visit/?bta=102069&brand=fiverrcpa&landingPage=https%3A%2F%2Fwww.fiverr.com%2Fprasadkirpekar%2Fdevelop-custom-feature-plugin-for-your-wordpress-site" class="py-2 text-center hover:text-white  rounded-md shadow-sm block px-4 w-full mr-1 bg-blue-700 text-gray-100">Make Plugin</a>
            <a target="_blank" href="https://bit.ly/WPFiverr" class="py-2 text-center hover:text-white rounded-md shadow-sm block px-4 w-full bg-gray-800 text-gray-100">Support</a>

        </div>
        <p class="mt-2 text-gray-600">(My own affiliate links. No third party service)</p>
        
        <div class="mt-10">
            <a target="_blank" href="https://woonotify.xyz/">
            <img src="https://woonotify.xyz/wp-content/uploads/2020/11/woonotify_license-1.png">
            <label><span class="text-lg">WPNotify</span><br>WooCommerce WhatsApp notifications</label>
            </a>
        </div>
        
        
    </div>
</div>
<script>
    var tab_list = ['#primarysettings','#advancedsettings','#morestuff','#contentsettings','#customsettings']
    
    function switchtab(tab){
        for (let i = 0; i < tab_list.length; i++) {
            const element = tab_list[i];
            if(tab==element){
                jQuery(tab).show()
                jQuery(tab+'btn').addClass('border-b-2')
                jQuery(tab+'btn').addClass('border-blue-500')  
                jQuery(tab+'btn').addClass('text-blue-500')  
                jQuery(tab+'btn').addClass('font-medium')  
                
            }
            else{
                jQuery(element).hide()
                jQuery(element+'btn').removeClass('border-b-2')
                jQuery(element+'btn').removeClass('border-blue-500') 
                jQuery(element+'btn').removeClass('text-blue-500')  
                jQuery(element+'btn').removeClass('font-medium')   
            }
        }
    }

    jQuery('document').ready(function(){
        jQuery('#pluginmodelclose').on('click',function(){
            jQuery('#pluginmodel').hide();
        })
    });

</script>