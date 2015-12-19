# Symfony Calculation Bundle

Installation
------------

Installation is a quick

1. Download bundle using composer
2. Enable the Bundle

Step 1: Download InfernosquadCalculationBundle using composer
------------

Require the bundle with composer:

    $ composer require infernosquad/calculation-bundle

Step 2: Enable the bundle
------------

Enable the bundle in the kernel:

    <?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Infernosquad\CalculationBundle\InfernosquadCalculationBundle(),
            // ...
        );
    }
