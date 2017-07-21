<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_096e93296d33f4f5464d91f7f7376a5f4b14a81c16dec3c607726b330d2e5a00 extends Twig_Template
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
        $__internal_e6b25f769e3b372528d38deb97b544a4777ebff0725bf2aabc0b7d90f9441f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b25f769e3b372528d38deb97b544a4777ebff0725bf2aabc0b7d90f9441f05->enter($__internal_e6b25f769e3b372528d38deb97b544a4777ebff0725bf2aabc0b7d90f9441f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_119ad35217253125c414ad1b57bc030e72ca6ee47cf1ea26a0b6d16edac10f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119ad35217253125c414ad1b57bc030e72ca6ee47cf1ea26a0b6d16edac10f19->enter($__internal_119ad35217253125c414ad1b57bc030e72ca6ee47cf1ea26a0b6d16edac10f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e6b25f769e3b372528d38deb97b544a4777ebff0725bf2aabc0b7d90f9441f05->leave($__internal_e6b25f769e3b372528d38deb97b544a4777ebff0725bf2aabc0b7d90f9441f05_prof);

        
        $__internal_119ad35217253125c414ad1b57bc030e72ca6ee47cf1ea26a0b6d16edac10f19->leave($__internal_119ad35217253125c414ad1b57bc030e72ca6ee47cf1ea26a0b6d16edac10f19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
