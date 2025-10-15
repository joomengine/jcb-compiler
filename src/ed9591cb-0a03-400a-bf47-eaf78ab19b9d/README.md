### JCB! Power
# class Extension (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml

class Extension  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getExtensionInstallScript(Container $container) : GetScriptInterface
  + getJ3ExtensionInstallScript(Container $container) : J3InstallScript
  + getJ4ExtensionInstallScript(Container $container) : J4InstallScript
  + getJ5ExtensionInstallScript(Container $container) : J5InstallScript
  + getJ6ExtensionInstallScript(Container $container) : J6InstallScript
  + getMoveFieldsRules(Container $container) : MoveFieldsRules
  + getJ3MoveFieldsRules(Container $container) : J3MoveFieldsRules
  + getJ4MoveFieldsRules(Container $container) : J4MoveFieldsRules
  + getJ5MoveFieldsRules(Container $container) : J5MoveFieldsRules
  + getJ6MoveFieldsRules(Container $container) : J6MoveFieldsRules
  + getUpdater(Container $container) : Updater
  + getFileContent(Container $container) : FileContent
  + getStaticFiles(Container $container) : StaticFiles
  + getDynamic(Container $container) : Dynamic
  + getModule(Container $container) : Module
  + getPlugin(Container $container) : Plugin
  + getPower(Container $container) : Power
}

note right of Extension::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Extension::getExtensionInstallScript
  Get the Joomla Extension Install Script

  since: 3.2.0
  return: GetScriptInterface
end note

note right of Extension::getJ3ExtensionInstallScript
  Get the Joomla 3 Extension Install Script

  since: 3.2.0
  return: J3InstallScript
end note

note left of Extension::getJ4ExtensionInstallScript
  Get the Joomla 4 Extension Install Script

  since: 3.2.0
  return: J4InstallScript
end note

note right of Extension::getJ5ExtensionInstallScript
  Get the Joomla 5 Extension Install Script

  since: 3.2.0
  return: J5InstallScript
end note

note left of Extension::getJ6ExtensionInstallScript
  Get the Joomla 6 Extension Install Script

  since: 5.1.2
  return: J6InstallScript
end note

note right of Extension::getMoveFieldsRules
  Get The Move Fields Rules Class.

  since: 5.1.2
  return: MoveFieldsRules
end note

note left of Extension::getJ3MoveFieldsRules
  Get The Move Fields Rules Class.

  since: 5.1.2
  return: J3MoveFieldsRules
end note

note right of Extension::getJ4MoveFieldsRules
  Get The Move Fields Rules Class.

  since: 5.1.2
  return: J4MoveFieldsRules
end note

note left of Extension::getJ5MoveFieldsRules
  Get The Move Fields Rules Class.

  since: 5.1.2
  return: J5MoveFieldsRules
end note

note right of Extension::getJ6MoveFieldsRules
  Get The Move Fields Rules Class.

  since: 5.1.2
  return: J6MoveFieldsRules
end note

note left of Extension::getUpdater
  Get The Updater Class.

  since: 5.1.2
  return: Updater
end note

note right of Extension::getFileContent
  Get The FileContent Class.

  since: 5.1.2
  return: FileContent
end note

note left of Extension::getStaticFiles
  Get The StaticFiles Class.

  since: 5.1.2
  return: StaticFiles
end note

note right of Extension::getDynamic
  Get The Dynamic Class.

  since: 5.1.2
  return: Dynamic
end note

note left of Extension::getModule
  Get The Module Class.

  since: 5.1.2
  return: Module
end note

note right of Extension::getPlugin
  Get The Plugin Class.

  since: 5.1.2
  return: Plugin
end note

note left of Extension::getPower
  Get The Power Class.

  since: 5.1.2
  return: Power
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
Super---ed9591cb_0a03_400a_bf47_eaf78ab19b9d---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")