<?php

include 'views/views.php';

printHeader('Publications');

?>

<p>
<b>See <a href="https://scholar.google.co.uk/citations?user=MTaRAPQAAAAJ">Google Scholar</a> for an up to date publication list.</b>
</p>


<h2>Publications</h2>

<h3>Adapting The Secretary Hiring Problem for Optimal Hot-Cold Tier Placement under Top-K Workloads</h3>
<p>The paper examines analytic solutions to optimization problems related to tiered/hierarchical storage under Top-K queries with HASTE, and its relation to the classic discrete optimization ‘Secretary Hiring Problem’. DBDM/CCGrid 2019.
<a href="https://arxiv.org/abs/1901.07335">Pre-Print</a> <a href="./pubs/BenBlamey-dbdm-ccgrid-prez.pdf">Slides</a>
</p>

<h3>Apache Spark Streaming and HarmonicIO: A Performance and Architecture Comparison</h3>
<a href="https://arxiv.org/pdf/1807.07724">Pre-Print</a>

<h3>HarmonicIO: Scalable Data Stream Processing for Scientific Datasets</h3>
<p>IEEE Services 2018. <a href="https://ieeexplore.ieee.org/abstract/document/8457894">IEEE Xplore</a></p>



<h3>Lifelogging with <i>SAESNEG</i>: A System for the Automated Extraction of Social Network Event Groups (PhD Thesis, 2015)</h3>

<p class="abstract">This thesis presents <i>SAESNEG</i>, a <i>System for the Automated Extraction of Social Network Event Groups</i>; a pipeline for the aggregation of the personal social media footprint, and its partitioning into events, the ``event clustering'' problem. <i>SAESNEG</i> facilitates a reminiscence-friendly user experience, where the user is able to navigate their social media footprint. A range of socio-technical issues are explored: the challenges to reminiscence, lifelogging, ownership, and digital death. Whilst previous systems have focused on the organisation of a single type of data, such as photos or Tweets respectively; <i>SAESNEG</i> handles a variety of types of social network documents found in a typical footprint (e.g. photos, Tweets, check-ins), with a variety of image, text and other metadata &mdash; <i>differently heterogeneous</i> data; adapted to sparse, private events typical of the personal social media footprint.</p>

<p class="abstract">Phase A extracts information, focusing on natural language processing; new techniques are developed; including a novel <i>distributed approach</i> to handling temporal expressions, and a parser for social events (such as birthdays). Information is also extracted from image and metadata, the resultant annotations feeding the subsequent event clustering. Phase B performs event clustering through the application of a number of pairwise similarity <i>strategies</i> -- a mixture of new and existing algorithms. Clustering itself is achieved by combining machine-learning with correlation clustering.</p>

<p class="abstract">The main contributions of this thesis are the identification of the technical research task (and the associated social need), the development of novel algorithms and approaches, and the integration of these with existing algorithms to form the pipeline. Results demonstrate <i>SAESNEG</i>'s capability to perform event clustering on a differently heterogeneous dataset, enabling users to achieve lifelogging in the context of their existing social media networks.</p>

<p>
<a href="pubs/thesis/Blamey,Ben-Thesis-(final)">PhD Thesis (PDF)</a> | 
<a href="pubs/thesis/blamey2015thesis.bib">Bibtex</a>
</p>

<br/>

<H3><i>&#39;The First Day of Summer&#39;: Parsing Temporal Expressions with Distributed Semantics</i> (2013)</H3>

<p class="abstract">
Detecting and understanding temporal expressions are key tasks in natural language processing (NLP), and are important for event detection and information retrieval. In the existing approaches, temporal semantics are typically represented as discrete ranges or specific dates, and the task is restricted to text that conforms to this representation. We propose an alternate paradigm: that of <i>distributed temporal semantics</i> - where a probability density function models relative probabilities of the various interpretations. We extend SUTime, a state-of-the-art NLP system to incorporate our approach, and build definitions of new and existing temporal expressions.
</p>

<p>
It would be great to hear about comments or suggestions. I would be keen to collaborate with anyone to incorporate the approach into other software or further academic work. I was thinking introducing P.D.F "dual" definitions over other time periods, such as "morning", "weekend" and the like. Nor did I solve the issue of reconciling the "next" operator with the probabilistic model.
</p>

<p><a href="http://www.socialworld.co.uk:8080/SUTimeDemo/Index" target="_blank">Online Demo</a>
| <a href="pubs/ai_2013/blamey13parsing.pdf">Paper (PDF)</a>
| <a href="pubs/ai_2013/blamey13parsing_slides.pdf">Slides (PDF)</a>
| <a href="pubs/ai_2013/blamey13parsing.bib">Bibtex</a>
| <a href="https://github.com/benblamey/stanford-nlp">Source Code</a></p>

<br/>

<H3><i>R U :-) or :-( ? Character- vs. Word-Gram Feature Selection for Sentiment Classification of OSN Corpora</i> (2012)</H3>

<p>Awarded <b>Prize for Best Poster</b> at <a href="http://www.bcs-sgai.org/ai2012/">BCS SGAI 2012</a>.

<p><a href="pubs/ai_2012/blamey2012ngram.pdf">Paper (PDF)</a> 
| <a href="pubs/ai_2012/blamey2012ngram_poster.pdf">Poster (PDF)</a>
| <a href="pubs/ai_2012/blamey2012ngram.bib">Bibtex</a>
| <a href="data/Twitter2012.zip">Data (Twitter only)</a></p>

<p>
If you use the data - please cite my paper! &#9786;
</p>

<?php
printFooter();
?>