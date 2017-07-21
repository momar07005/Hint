<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_021e69b5a6e411ba91c982988bd0c689c7ab098c01a772e7761fc8059801ab35 extends Twig_Template
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
        $__internal_80f786216074639964ebea39e2ef612f89168b2393ec5e7cbc38fe0381de38af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f786216074639964ebea39e2ef612f89168b2393ec5e7cbc38fe0381de38af->enter($__internal_80f786216074639964ebea39e2ef612f89168b2393ec5e7cbc38fe0381de38af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_493c33eb445cb92a02c95933d418fca21a5cdbaa7c1e1295c4d85c2dc171d7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493c33eb445cb92a02c95933d418fca21a5cdbaa7c1e1295c4d85c2dc171d7e9->enter($__internal_493c33eb445cb92a02c95933d418fca21a5cdbaa7c1e1295c4d85c2dc171d7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_80f786216074639964ebea39e2ef612f89168b2393ec5e7cbc38fe0381de38af->leave($__internal_80f786216074639964ebea39e2ef612f89168b2393ec5e7cbc38fe0381de38af_prof);

        
        $__internal_493c33eb445cb92a02c95933d418fca21a5cdbaa7c1e1295c4d85c2dc171d7e9->leave($__internal_493c33eb445cb92a02c95933d418fca21a5cdbaa7c1e1295c4d85c2dc171d7e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
