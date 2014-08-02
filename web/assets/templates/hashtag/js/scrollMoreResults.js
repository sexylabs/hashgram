/**
 * Created by victormartinez on 02/08/14.
 */
$(document).ready(function()
{
    // TODO: Esconder client_id
    const callback  = "loadMorePhotos";
    const client_id = "d2c57fc594d84ccdb4e455beb5da6bd1";
    const hashtag   = $("div#tag_info").attr("hashtag");
    const url_base  = "https://api.instagram.com/v1/tags/" + hashtag + "/media/recent?";

    var allowAjax = true;
    showLoading(false);

    $(window).scroll(function()
    {
        showLoading(true);

        if (document.documentElement.clientHeight +
            $(document).scrollTop() >= document.body.offsetHeight)
        {
            if ($("div#tag_info").attr("data_max_tag_id") != "")
            {
                loadMorePhotos();
            }
            else
            {
                showLoading(false);
                $("div#message").html("<b>No more results =/</b>");
            }
        }
    });

    /**
     * Show or hide loading based on the boolean parameter
     *
     * @param value
     */
    function showLoading(value)
    {
        if (value)
        {
            $("div#loading").show();
        }
        else
        {
            $("div#loading").hide()
        }
    }

    /**
     *  Request more photos
     */
    function loadMorePhotos() {

        if (allowAjax)
        {
            allowAjax = false;

            $.ajax({
                type: "POST",
                dataType: 'jsonp',
                url: returnUrl(),
                success:function(result)
                {
                    var max_tag_id     = $("div#tag_info").attr("data_max_tag_id");
                    var new_max_tag_id = extractMaxTagId(result.pagination.next_url);

                    showLoading(false);

                    if (max_tag_id == new_max_tag_id)
                    {
                        $("div#message").html("<b>No more results =/</b>");
                        $("div#tag_info").attr("data_max_tag_id", "");
                    }
                    else
                    {
                        allowAjax = true;
                        $("div#tag_info").attr("data_max_tag_id", new_max_tag_id);
                        showPhotos(result);
                    }
                }
            });
        }

    }

    /**
     * Return the url required to make the post request to Instagram API
     *
     * @returns {string}
     */
    function returnUrl()
    {
        return url_base + "callback=" + callback + "&client_id=" + client_id + "&max_tag_id=" + $("div#tag_info").attr("data_max_tag_id");
    }

    /**
     * Return the max_tag_id based on the next_url that comes from Instagram API
     *
     * @param url
     * @returns {string}
     */
    function extractMaxTagId(url)
    {
        var urlArray = url.split("&max_tag_id=");
        return urlArray[1];
    }

    /**
     * Show the photos based on the result received from Instagram API
     *
     * @param result
     */
    function showPhotos(result)
    {
        var data = result.data;

        var index = 0;
        var imgTag;
        var images = "";

        for (i = 0; i < 4; i++)
        {
            images += "<div class='row'>";

            for (j = 0; j < 4; j++)
            {
                images += "<div class='col-xs-3 no-padding'>";

                imgTag = "<img src='" + data[index].images.standard_resolution.url + "' class='img-responsive' />";
                images += imgTag;

                images += "</div>";

                index = index + 1;
            }
            images += "</div>";
        }

        $("#photos").append(images);
    }
});
