<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @help_topics/block_content.add.html.twig */
class __TwigTemplate_3c8a6f8162d88ac0cf73bab9a1cbd77f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $context["library_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Content blocks", array());
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["library_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["library_link_text"] ?? null), 10, $this->source), "entity.block_content.collection"));
        // line 11
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 12
        yield t("Create a content block, which can later be placed on the site.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Content</em>.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Open the @library_link tab.", array("@library_link" => ($context["library_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 17
        yield t("Click <em>Add content block</em>. If you have more than one block type defined on your site, click the name of the type you want to create.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Enter a description of your block (to be shown to administrators) and the body text for your block.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Save</em>.", array());
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/block_content.add.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  55 => 13,  51 => 12,  46 => 11,  44 => 10,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/block_content.add.html.twig", "/var/www/html/drupal/core/modules/block_content/help_topics/block_content.add.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 9);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 10, "help_route_link" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
