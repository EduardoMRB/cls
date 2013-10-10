<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_846f154f6c0f87df47ee040c1465d5b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " .sonata-ba-list-field');

        // the user does click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_";
        // line 52
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog('close');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_";
        // line 92
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();
                }
            });
        });
    }

    // handle the add link
    var field_dialog_form_list_";
        // line 100
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 111
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 122
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                field_dialog_form_list_handle_action_";
        // line 126
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 129
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 134
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 136
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] close callback, removing js event');

                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 139
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 140
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 148
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 149
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 156
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        Admin.log('[";
        // line 158
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 166
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // populate the popup container
                field_dialog_";
        // line 169
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 173
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
                jQuery('form', field_dialog_";
        // line 174
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 177
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog({
                    height: 'auto',
                    width: 850,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 183
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 185
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] dialog closed - removing  events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 187
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 188
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 196
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 208
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 210
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 224
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 234
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 242
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 247
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog('close');

                    ";
        // line 249
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
            // line 250
            echo "                        ";
            // line 254
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val(data.objectId);
                        jQuery('#";
            // line 255
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').change();

                    ";
        } else {
            // line 258
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 260
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 261
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "subclass" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code")));
            // line 267
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 272
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 273
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 280
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 285
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 290
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(data);

                Admin.add_pretty_errors(field_dialog_";
        // line 292
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 295
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 302
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    function initialize_popup_";
        // line 304
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 306
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ") {
            field_dialog_";
        // line 307
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 310
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

            Admin.log('[";
        // line 312
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 319
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 321
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 326
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 330
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }

    Admin.add_pretty_errors(field_dialog_";
        // line 337
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");


    ";
        // line 340
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
            // line 341
            echo "        ";
            // line 344
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 346
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 350
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 354
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 361
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 366
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 373
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 376
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " option').get(0)) {
                jQuery('#";
            // line 377
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 380
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val('');
            jQuery('#";
            // line 381
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('change');

            return false;
        }
        ";
            // line 388
            echo "
        // update the label
        jQuery('#";
            // line 390
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 392
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "] update the label');

            jQuery('#field_widget_";
            // line 394
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 397
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "uniqid"), "code" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "code")));
            // line 401
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 404
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 410
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 404,  676 => 401,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  605 => 361,  595 => 354,  588 => 350,  577 => 344,  575 => 341,  567 => 337,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  514 => 306,  509 => 304,  492 => 295,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  396 => 234,  331 => 187,  267 => 156,  253 => 148,  232 => 136,  213 => 126,  306 => 140,  303 => 139,  256 => 120,  248 => 115,  242 => 140,  150 => 58,  346 => 196,  343 => 91,  327 => 86,  320 => 84,  313 => 82,  304 => 174,  293 => 75,  287 => 72,  271 => 66,  265 => 125,  262 => 63,  260 => 123,  257 => 149,  216 => 99,  188 => 21,  185 => 85,  12 => 34,  97 => 63,  165 => 76,  701 => 213,  695 => 210,  692 => 209,  690 => 410,  674 => 397,  669 => 202,  654 => 390,  643 => 381,  623 => 373,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 307,  516 => 166,  498 => 157,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  450 => 145,  439 => 260,  420 => 249,  418 => 128,  404 => 124,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  336 => 99,  329 => 95,  326 => 185,  311 => 89,  297 => 84,  274 => 128,  263 => 124,  250 => 67,  236 => 108,  200 => 55,  191 => 50,  152 => 92,  344 => 97,  340 => 90,  338 => 94,  335 => 188,  321 => 183,  315 => 83,  295 => 88,  292 => 134,  277 => 68,  259 => 70,  215 => 54,  190 => 50,  181 => 79,  178 => 45,  687 => 225,  684 => 205,  679 => 219,  672 => 215,  666 => 212,  662 => 210,  660 => 209,  657 => 200,  651 => 198,  649 => 205,  646 => 204,  640 => 192,  638 => 201,  635 => 200,  629 => 376,  627 => 197,  624 => 196,  618 => 194,  616 => 193,  613 => 366,  610 => 191,  606 => 189,  600 => 145,  591 => 142,  586 => 141,  581 => 346,  578 => 177,  573 => 340,  570 => 137,  564 => 127,  560 => 126,  551 => 124,  546 => 121,  529 => 117,  525 => 116,  520 => 114,  515 => 112,  512 => 111,  505 => 110,  502 => 109,  496 => 108,  493 => 155,  485 => 105,  482 => 104,  476 => 103,  464 => 104,  462 => 103,  458 => 101,  455 => 147,  448 => 96,  442 => 95,  434 => 138,  421 => 56,  417 => 55,  412 => 53,  403 => 50,  399 => 49,  389 => 118,  383 => 224,  376 => 40,  370 => 100,  366 => 210,  356 => 32,  351 => 30,  348 => 29,  345 => 28,  339 => 100,  332 => 88,  330 => 87,  325 => 221,  323 => 191,  319 => 90,  316 => 189,  310 => 81,  289 => 81,  286 => 132,  281 => 172,  255 => 167,  244 => 162,  228 => 59,  222 => 155,  195 => 150,  180 => 104,  175 => 76,  161 => 70,  251 => 105,  233 => 62,  225 => 156,  218 => 91,  212 => 88,  198 => 80,  194 => 87,  184 => 47,  153 => 71,  134 => 55,  104 => 67,  129 => 56,  137 => 58,  90 => 27,  84 => 38,  568 => 179,  557 => 330,  553 => 176,  545 => 173,  540 => 120,  534 => 169,  532 => 118,  526 => 310,  517 => 113,  513 => 165,  507 => 159,  504 => 302,  500 => 158,  495 => 156,  488 => 106,  477 => 150,  470 => 128,  467 => 127,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 141,  426 => 102,  419 => 98,  415 => 247,  410 => 96,  395 => 120,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  369 => 136,  367 => 99,  361 => 208,  357 => 125,  352 => 94,  347 => 102,  333 => 117,  324 => 92,  307 => 87,  302 => 78,  300 => 138,  296 => 76,  291 => 169,  288 => 85,  282 => 79,  280 => 130,  275 => 170,  272 => 158,  249 => 55,  226 => 67,  223 => 27,  205 => 84,  197 => 119,  192 => 87,  186 => 111,  172 => 99,  148 => 63,  174 => 60,  114 => 71,  170 => 78,  155 => 62,  127 => 76,  124 => 49,  118 => 28,  113 => 46,  110 => 47,  53 => 24,  77 => 27,  70 => 33,  65 => 29,  160 => 75,  146 => 34,  126 => 55,  76 => 35,  23 => 18,  34 => 16,  100 => 43,  81 => 26,  58 => 23,  20 => 11,  480 => 132,  474 => 285,  469 => 158,  461 => 149,  457 => 131,  453 => 146,  444 => 142,  440 => 148,  437 => 94,  435 => 258,  430 => 103,  427 => 57,  423 => 136,  413 => 134,  409 => 127,  407 => 242,  402 => 130,  398 => 121,  393 => 119,  387 => 122,  384 => 116,  381 => 120,  379 => 41,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 33,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 97,  305 => 184,  298 => 173,  294 => 178,  285 => 84,  283 => 166,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 96,  220 => 56,  214 => 98,  177 => 131,  169 => 73,  140 => 53,  132 => 57,  128 => 58,  107 => 40,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  243 => 65,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 134,  224 => 102,  221 => 77,  219 => 129,  217 => 75,  208 => 124,  204 => 154,  179 => 107,  159 => 69,  143 => 48,  135 => 81,  119 => 39,  102 => 39,  71 => 29,  67 => 32,  63 => 24,  59 => 23,  28 => 14,  93 => 38,  88 => 60,  78 => 53,  87 => 38,  44 => 19,  31 => 22,  21 => 11,  46 => 21,  25 => 12,  201 => 153,  196 => 52,  183 => 82,  171 => 102,  166 => 100,  163 => 60,  158 => 74,  156 => 93,  151 => 51,  142 => 60,  138 => 61,  136 => 60,  121 => 75,  117 => 44,  105 => 46,  91 => 40,  62 => 28,  49 => 23,  94 => 40,  89 => 39,  85 => 30,  75 => 28,  68 => 30,  56 => 40,  27 => 16,  38 => 32,  26 => 20,  24 => 13,  19 => 11,  79 => 31,  72 => 25,  69 => 50,  47 => 19,  40 => 18,  37 => 23,  22 => 12,  246 => 54,  157 => 58,  145 => 56,  139 => 31,  131 => 45,  123 => 57,  120 => 56,  115 => 49,  111 => 40,  108 => 44,  101 => 37,  98 => 43,  96 => 42,  83 => 15,  74 => 52,  66 => 25,  55 => 22,  52 => 20,  50 => 20,  43 => 33,  41 => 18,  35 => 16,  32 => 16,  29 => 21,  209 => 95,  203 => 122,  199 => 53,  193 => 51,  189 => 147,  187 => 86,  182 => 84,  176 => 81,  173 => 42,  168 => 69,  164 => 71,  162 => 57,  154 => 66,  149 => 36,  147 => 90,  144 => 67,  141 => 66,  133 => 51,  130 => 56,  125 => 40,  122 => 44,  116 => 47,  112 => 52,  109 => 69,  106 => 35,  103 => 45,  99 => 30,  95 => 42,  92 => 61,  86 => 43,  82 => 23,  80 => 41,  73 => 24,  64 => 31,  60 => 22,  57 => 22,  54 => 25,  51 => 38,  48 => 15,  45 => 19,  42 => 18,  39 => 12,  36 => 17,  33 => 17,  30 => 15,);
    }
}
