### JCB! Power
# class Reverse (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Placeholder**

```uml
@startuml

class Reverse  #Gold {
  # Config $config
  # Placeholder $placeholder
  # Language $language
  # Extractor $extractor
  # Power $power
  # JoomlaPower $joomla
  + __construct(Config $config, Placeholder $placeholder, ...)
  + engine(string $string, array $placeholders, ...) : string
  # setReverse(string $updateString, string $string, ...) : string
  # reverseSuperPowers(string $updateString, string $string, ...) : string
  # reverseJoomlaPowers(string $updateString, string $string, ...) : string
  # getReversePower(array $powers, array $useStatements, ...) : ?array
  # reverseLanguage(string $updateString, string $string, ...) : string
  # reverseCustomCode(string $updateString, string $string) : string
}

note right of Reverse::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Placeholder $placeholder
    Language $language
    Extractor $extractor
    Power $power
    JoomlaPower $joomla
end note

note left of Reverse::engine
  Reverse Engineer the dynamic placeholders (TODO hmmmm this is not ideal)

  since: 3.2.0
  return: string
  
  arguments:
    string $string
    array $placeholders
    string $target
    ?int $id = null
    string $field = 'code'
    string $table = 'custom_code'
    ?array $useStatements = null
end note

note right of Reverse::setReverse
  Reverse engineer the dynamic language, and super powers

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    string $target
    ?array $useStatements
end note

note left of Reverse::reverseSuperPowers
  Set the super powers keys for the reveres process

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    ?array $useStatements
end note

note right of Reverse::reverseJoomlaPowers
  Set the joomla powers keys for the reveres process

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    ?array $useStatements
end note

note left of Reverse::getReversePower
  Set the super powers keys for the reveres process

  since: 3.2.0
  return: ?array
  
  arguments:
    array $powers
    array $useStatements
    string $target
end note

note right of Reverse::reverseLanguage
  Set the language strings for the reveres process

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    string $target
end note

note left of Reverse::reverseCustomCode
  Set the custom code placeholder for the reveres process

  since: 3.2.0
  return: string
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
Super---ca111518_e47c_4049_b1b2_cb010f23866f---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")