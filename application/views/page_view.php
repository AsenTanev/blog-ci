<div id="left_wrapper">
<div id="page_body">
<h2><?php echo $page['title']; ?></h2>
<?php echo eval('?>' .$page['body']. '<?php '); ?>
<div id="comments">
<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE/ all the code down there is for the comments on posts * * */
        var disqus_shortname = 'AsenTanevCiBlog'; // required: replace example with your forum shortname / tuk trqbva da si smenite shortname

        /* * * DON'T EDIT BELOW THIS LINE / ne editvaite tazi chast ot koda* * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
</div>
</div>