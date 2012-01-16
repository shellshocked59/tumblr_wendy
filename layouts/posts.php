<section id="main" class="clearfix">
     <div class="layout">           
     {block:SearchPage}
        <article>
           <div>
              <div class="searchPage">
                 <h2>Search results for <a href="{URLSafeSearchQuery}">{SearchQuery}</a></h2>
              </div>
                    {block:NoSearchResults}
                    <div class="searchPageText">
                       <p>I’m sorry, but we couldn't find anything matching "<b>{SearchQuery}</b>". Suggestions:</p>
                       <ul>
                          <li>Make sure all words are spelled correctly.</li>
                          <li>Try different keywords.</li>
                          <li>Try more general keywords.</li>
                       </ul>
                    </div>
                    {/block:NoSearchResults}
           </div>
        </article>
     {/block:SearchPage}
      
     {block:TagPage}
     <article>
        <div>
           <div class="searchPage">
           <h2>Posts tagged <a href="{TagURL}">{Tag}</a></h2>
           </div>
        </div>
     </article>
     {/block:TagPage}      

{block:Posts}
     <div id="designline">
        <h5 class="postDate">
           <abbr>{block:Date}<a href="{Permalink}">{DayOfMOnth}{DayOfMonthSuffix} {ShortMonth} {Year}</a>{/block:Date}{block:NoteCount} | <a href="{Permalink}#notes">{NoteCountWithLabel}</a>{/block:NoteCount}
           </abbr>
        </h5>
     </div>

     <article>
        <div>
           {block:Text}
              {block:Title}<h2><a href="{Permalink}">{Title}</a></h2>{/block:Title}
              {Body}
           {/block:Text}
          
           {block:Photo}
              {LinkOpenTag}<img src="{PhotoURL-500}" class="post_photo" alt="{PhotoAlt}" />{LinkCloseTag}
              {block:Caption}<div class="photoCaption">{Caption}</div>{/block:Caption}
           {/block:Photo}
          
           {block:Photoset}
              <div class="media">{Photoset-500}</div>
              {block:Caption}<div class="caption">{Caption}</div>{/block:Caption}
           {/block:Photoset}
          
           {block:Quote}
              <div id="quoteText"><h2>{Quote}</h2></div>
              {block:Source}<div id="quoteSource"><p>&mdash;{Source}</p></div>{/block:Source}
           {/block:Quote}

           {block:Link}
              <h2><a href="{URL}" {Target}>{Name}</a></h2>
              {block:Description}
              <div>{Description}</div>
              {/block:Description}
           {/block:Link}       
          
          {block:Chat}
             {block:Title}<h2>{Title}</h2>{/block:Title}
             <ul class="chat">
                {block:Lines}
                <li>{block:Label}<strong>{Label}</strong>{/block:Label} {Line}</li>
                {/block:Lines}
             </ul>
          {/block:Chat}

          {block:Audio}
             <div class="audioleft">
                <div class="audioc">
                <div class="audio">{AudioPlayerBlack}</div>
                </div>
             </div>
             <div class="audioright"> 
                <div class="audioCaption">{block:Artist}<b>{Artist}</b>{/block:Artist}
<p>&mdash;{block:TrackName}{TrackName}{/block:TrackName}</p>
                </div>
             </div>
             <div class="audioClear"></div>
             <div class="audioContainer">
                {block:Caption}{Caption}{/block:Caption}
             </div>
          {/block:Audio}
         
          {block:Video}
             <div class="media">{Video-500}</div>
             {block:Caption}<div>{Caption}</div>{/block:Caption} 
          {/block:Video}
          
          {block:Answer}
             <h3>{Asker} asked: {Question}</h3>
             {Answer}
          {/block:Answer}
          
          {block:Date}
 
                    {block:IfDisqusShortname}
  <script type="text/javascript">
  //<![CDATA[
  (function() {
    var links = document.getElementsByTagName('a');
    var query = '?';
    for(var i = 0; i < links.length; i++) {
      if(links[i].href.indexOf('#disqus_thread') >= 0) {
        query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
      }
    }
    document.write('<script charset="utf-8" type="text/javascript" src="http://disqus.com/forums/{text:Disqus Shortname}/get_num_replies.js' + query + '"></' + 'script>');
    })();
    //]]>
    </script>
  {/block:IfDisqusShortname}
            
          {block:PostNotes}
             {PostNotes}
          {/block:PostNotes}
          
          {block:Date}
 
        </div>
     </article>
{/block:Posts}

     {block:PermalinkPagination}
        <nav id="pageNav">
           <ul class="clearfix">
              {block:PreviousPost}<li><a href="{PreviousPost}" id="pageNavNewer">Previous</a></li>{/block:PreviousPost}
              {block:NextPost}<li><a href="{NextPost}" id="pageNavOlder">Next</a></li>{/block:NextPost}  
           </ul>
        </nav>
     {/block:PermalinkPagination}
      
     {block:Pagination}
        <nav id="pageNav">
           <ul class="clearfix">
             {block:PreviousPage}<li><a href="{PreviousPage}" id="pageNavNewer">Newer</a></li>{/block:PreviousPage} 
             {block:JumpPagination length="5"}
             {block:CurrentPage}<li><a href="{URL}" class="active">{PageNumber}</a></li>{/block:CurrentPage}
             {block:JumpPage}<li><a href="{URL}">{PageNumber}</a></li>{/block:JumpPage}
             {/block:JumpPagination}
             {block:NextPage}<li><a href="{NextPage}" id="pageNavOlder">Older</a></li>{/block:NextPage} 
           </ul>
        </nav>
     {/block:Pagination} 
      
     {block:DayPagination}
        <nav id="pageNav">
           <ul class="clearfix">
              {block:PreviousDayPage}<li><a href="{PreviousDayPage}">&laquo; {DayOfMonth} {ShortMonth}</a></li>{/block:PreviousDayPage}{block:NextDayPage}|<li><a href="{NextDayPage}">{DayOfMonth} {ShortMonth} &raquo;</a></li>{block:NextDayPage}
           </ul>
        </nav>
     {/block:DayPagination}
     
     </div><!-- END layout -->
</section>
