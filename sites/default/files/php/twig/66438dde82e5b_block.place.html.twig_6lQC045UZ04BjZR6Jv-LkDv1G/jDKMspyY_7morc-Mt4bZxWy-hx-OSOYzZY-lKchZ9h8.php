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

/* @help_topics/block.place.html.twig */
class __TwigTemplate_e87797a4f7010053791a35bb58170c7f extends Template
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
        // line 7
        $context["layout_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 8
            yield t("Block layout", array());
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["layout_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["layout_link_text"] ?? null), 10, $this->source), "block.admin_display"));
        // line 11
        $context["configure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("block.configure"));
        // line 12
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 13
        yield t("Place a block into a theme's region.", array());
        yield "</p>
<h2>";
        // line 14
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 16
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; @layout_link.", array("@layout_link" => ($context["layout_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 17
        yield t("Click the name of the theme that you want to place the block in.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Optionally, click <em>Demonstrate block regions</em> to see the regions of the theme.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Find the region where you want the block, and click <em>Place block</em> in that region. A modal dialog will pop up.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("Find the block you want to place and click <em>Place block</em>. A <em>Configure block</em> modal dialog will pop up.", array());
        yield "</li>
  <li>";
        // line 21
        yield t("Configure the block and click <em>Save block</em>; see @configure_topic for configuration details.", array("@configure_topic" => ($context["configure_topic"] ?? null), ));
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/block.place.html.twig";
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
        return array (  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  58 => 14,  54 => 13,  49 => 12,  47 => 11,  45 => 10,  42 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/block.place.html.twig", "/var/www/html/drupal/core/modules/block/help_topics/block.place.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 10, "help_route_link" => 10, "help_topic_link" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link', 'help_topic_link'],
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
