  <div class="columns">
      <img src="images/smap-front.png" align="left" width="380" alt="A sketch-map projection of a reconnaissance metadynamics trajectory for ala12" class="floatleft"/> 
      <p>
       Sketch-map is a dimensionality reduction algorithm that is particularly well suited 
       to examining the high-dimensionality  data that is routinely produced in atomistic simulations.  It is successful in this aim because it works 
       by endeavoring to reproduce the connectivity between a set of high dimensionality data points in a space of lower dimensionality.  This is done 
       by transforming the distances between the points in the low and high-dimensionality space by a sigmoid function.  This forces points that are 
       close together in the high-dimensionality space to lie close together in the low-dimensionality space and points that are far apart in the 
       high-dimensionality space to lie far apart.  However, because of the form of the sigmoid function, these far apart points can be arbitrarily 
       far apart in the lower dimensionality space.  It this flexibility that makes the algorithm successful - because it is not trying to accurately 
       reproduce the distances between the far apart data points in the space of lower dimensionality it is free to focus all it's energies on reproducing 
       the connectivity data, which is where there is the evidence that the free energy landscape has a low dimensionality.
       </p>

     <p>
     On these pages you can find information on the algorithm as well as information on how to download a c++ implementation.  We are still actively 
     working on this implementation and thus the code and documentation are far from complete.  Users are kindly requested to report any bugs they find to
     michele dot ceriotti at chem dot ox dot ac dot uk.
      </p>
  </div>
 <div class="columns">
    <h2> Quick links </h2>
    <p> Users ML: sketchmap4md-users@lists.berlios.de </p>
    <p> Go to the <a href="https://developer.berlios.de/projects/sketchmap/"> developer's page</a></p>
    <p> Browse the <a href="https://cvs.berlios.de/cgi-bin/viewvc.cgi/sketchmap">CVS tree</a> </p>
    <br/>
    <b> WARNING!</b> These pages are still being worked on, and might be incomplete and buggy. 
    Please report any inconsistency to michele dot ceriotti at chem dot ox dot ac dot uk.
    <br/>
  </div>