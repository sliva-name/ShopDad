<?php if(seo('title')): ?>
    <title><?php echo seo()->render('title'); ?></title>

    <?php if (! (seo()->hasTag('og:title'))): ?>
        
        <meta property="og:title" content="<?php echo seo()->render('title'); ?>" />
    <?php endif; ?>
<?php endif; ?>

<?php if(seo('description')): ?>
    <meta property="og:description" content="<?php echo seo()->render('description'); ?>" />
    <meta name="description" content="<?php echo seo()->render('description'); ?>" />
<?php endif; ?>

<?php if(seo('keywords')): ?>
    <meta name="keywords" content="<?php echo seo()->render('keywords'); ?>" />
<?php endif; ?>

<?php if(seo('type')): ?>
    <meta property="og:type" content="<?php echo seo()->render('type'); ?>" />
<?php else: ?>
    <meta property="og:type" content="website" />
<?php endif; ?>

<?php if(seo('site')): ?> <meta property="og:site_name" content="<?php echo seo()->render('site'); ?>" /> <?php endif; ?>

<?php if(seo('locale')): ?> <meta property="og:locale" content="<?php echo seo()->render('locale'); ?>" /> <?php endif; ?>

<?php if(seo('image')): ?> <meta property="og:image" content="<?php echo seo()->render('image'); ?>" /> <?php endif; ?>

<?php if(seo('url')): ?>
    <meta property="og:url" content="<?php echo seo()->render('url'); ?>" />
    <link rel="canonical" href="<?php echo seo()->render('url'); ?>" />
<?php endif; ?>

<?php $__currentLoopData = seo()->tags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $tag; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = seo()->extensions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extension): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $extension] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\OSPanel\domains\ShopDad\vendor\archtechx\laravel-seo\src/../resources/views/components/meta.blade.php ENDPATH**/ ?>