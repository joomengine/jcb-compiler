### JCB! Power
# final class Infusion (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Joomlaplugin\JoomlaFour**

```uml
@startuml

class Infusion << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Placeholder $placeholder
  # Header $header
  # Event $event
  # Data $data
  # InstallScript $installscript
  # Extension $extension
  # Provider $provider
  # MainXML $mainxml
  # ContentMulti $contentmulti
  # ContentOne $contentone
  # FieldsetExtension $fieldsetextension
  + __construct(Config $config, Placeholder $placeholder, ...)
  + set() : void
  # triggerBeforeInfusionEvent(object $plugin) : void
  # setPlaceholders(object $plugin) : void
  # buildPluginContent(object $plugin) : void
  # setExtensionClassHeader(object $plugin) : void
  # setExtensionClass(object $plugin) : void
  # setProviderClassHeader(object $plugin) : void
  # setProviderClass(object $plugin) : void
  # setInstallClass(object $plugin) : void
  # setFieldsets(object $plugin) : void
  # setMainXml(object $plugin) : void
  # triggerAfterInfusionEvent(object $plugin) : void
}

note right of Infusion::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Config $config
    Placeholder $placeholder
    Header $header
    Event $event
    Data $data
    InstallScript $installscript
    Extension $extension
    Provider $provider
    MainXML $mainxml
    ContentMulti $contentmulti
    ContentOne $contentone
    FieldsetExtension $fieldsetextension
end note

note left of Infusion::set
  Infuse the plugin data into the content.
This method processes each plugin in the data set, triggering events
before and after infusion, setting placeholders, and adding content
such as headers, classes, and XML configurations.

  since: 5.0.2
  return: void
end note

note right of Infusion::triggerBeforeInfusionEvent
  Trigger the event before infusing the plugin data.

  since: 5.0.2
  return: void
end note

note left of Infusion::setPlaceholders
  Set placeholders based on plugin data.

  since: 5.0.2
  return: void
end note

note right of Infusion::buildPluginContent
  Build and set the content related to the plugin.

  since: 5.0.2
  return: void
end note

note left of Infusion::setExtensionClassHeader
  Set the extension class header content.

  since: 5.0.2
  return: void
end note

note right of Infusion::setExtensionClass
  Set the extension class content.

  since: 5.0.2
  return: void
end note

note left of Infusion::setProviderClassHeader
  Set the provider class header content.

  since: 5.0.2
  return: void
end note

note right of Infusion::setProviderClass
  Set the provider class content.

  since: 5.0.2
  return: void
end note

note left of Infusion::setInstallClass
  Set the install script content, if needed.

  since: 5.0.2
  return: void
end note

note right of Infusion::setFieldsets
  Set fieldset content based on form files.

  since: 5.0.2
  return: void
end note

note left of Infusion::setMainXml
  Set the main XML content for the plugin.

  since: 5.0.2
  return: void
end note

note right of Infusion::triggerAfterInfusionEvent
  Trigger the event after infusing the plugin data.

  since: 5.0.2
  return: void
end note

@enduml
```

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---84fe58db_d64d_42c6_9b41_f80bcff34c7f---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")