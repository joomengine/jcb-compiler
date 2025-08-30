### JCB! Power
# final class CustomGetMethods (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Dynamicget**

```uml
@startuml

class CustomGetMethods << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Placeholder $placeholder
  # FieldonContentPrepare $fieldoncontentprepare
  # JoinStructure $joinstructure
  # DecodeColumn $decodecolumn
  # FilterColumn $filtercolumn
  # UikitLoader $uikitloader
  # ContentOne $contentone
  # SiteDecrypt $sitedecrypt
  # ModelExpertFieldInitiator $modelexpertfieldinitiator
  # SiteFieldData $sitefielddata
  # SiteFieldDecodeFilter $sitefielddecodefilter
  # OtherJoin $otherjoin
  # OtherQuery $otherquery
  # OtherFilter $otherfilter
  # OtherWhere $otherwhere
  # OtherOrder $otherorder
  # OtherGroup $othergroup
  # EventDispatcher $eventdispatcher
  + __construct(Config $config, Placeholder $placeholder, ...)
  + get(mixed $mainGet, string $code) : string
  - isValidCustomGet(mixed $mainGet) : boolean
  - processCustomGet(array $customGets, string $code) : string
  - removeCryptionTypes(string $code) : void
  - buildCustomMethod(array $get, array $default) : string
  - buildDatabaseSetup(array $get, array $default) : string
  - applyQueryConditions(array $get, array $default) : string
  - applyAdditionalBuilders(array $default) : string
  - buildQueryExecutionBlock(array $get, array $default) : string
  - buildConditionalDecodingBlock(array $get, array $default) : string
  - getDecoderCode(array $get, string $code, ...) : string
  - getDecoderFilterCode(array $get, string $code, ...) : string
  - getContentPrepareCode(array $get, string $code, ...) : string
  - getUIKitCode(array $get, string $code, ...) : string
  - getJoinCode(?array $joinedChecker) : string
  - hasFieldProcessing($parts) : bool
  - buildFieldProcessingBlock(string $decoder, string $decoderFilter, ...) : string
  - injectCryptionScript(string $methods, array $default, ...) : string
  - injectDispatcherIfNeeded(string $methods, string $code) : string
}

note right of CustomGetMethods::__construct
  Constructor.

  since: 5.1.2
  
  arguments:
    Config $config
    Placeholder $placeholder
    FieldonContentPrepare $fieldoncontentprepare
    JoinStructure $joinstructure
    DecodeColumn $decodecolumn
    FilterColumn $filtercolumn
    UikitLoader $uikitloader
    ContentOne $contentone
    SiteDecrypt $sitedecrypt
    ModelExpertFieldInitiator $modelexpertfieldinitiator
    SiteFieldData $sitefielddata
    SiteFieldDecodeFilter $sitefielddecodefilter
    OtherJoin $otherjoin
    OtherQuery $otherquery
    OtherFilter $otherfilter
    OtherWhere $otherwhere
    OtherOrder $otherorder
    OtherGroup $othergroup
    EventDispatcher $eventdispatcher
end note

note left of CustomGetMethods::get
  Get the dynamic get custom item methods.

  since: 5.1.2
  return: string
end note

note right of CustomGetMethods::isValidCustomGet
  Check if the customGet object is valid.

  since: 5.1.2
  return: boolean
end note

note left of CustomGetMethods::processCustomGet
  Process all custom_get entries.

  since: 5.1.2
  return: string
end note

note right of CustomGetMethods::removeCryptionTypes
  Remove cryption types for a given code.

  since: 5.1.2
  return: void
end note

note left of CustomGetMethods::buildCustomMethod
  Build the custom method code.

  since: 5.1.2
  return: string
end note

note right of CustomGetMethods::buildDatabaseSetup
  Build database setup section.

  since: 5.1.2
  return: string
end note

note left of CustomGetMethods::applyQueryConditions
  Apply query conditions.

  since: 5.1.2
  return: string
end note

note right of CustomGetMethods::applyAdditionalBuilders
  Apply additional builder parts (query, filter, where, order, group).

  since: 5.1.2
  return: string
end note

note left of CustomGetMethods::buildQueryExecutionBlock
  Build query execution and result processing.

  since: 5.1.2
  return: string
end note

note right of CustomGetMethods::buildConditionalDecodingBlock
  Build the conditional field processing block if decoding, UIkit, filters, or joins are needed.

  since: 5.1.2
  return: string
end note

note left of CustomGetMethods::getDecoderCode
  Generate decoder block code for the matched field set.

  since: 5.1.2
  return: string
  
  arguments:
    array $get
    string $code
    ?array $checker
end note

note right of CustomGetMethods::getDecoderFilterCode
  Generate filter decoder block for field-specific filters.

  since: 5.1.2
  return: string
  
  arguments:
    array $get
    string $code
    ?array $checker
end note

note left of CustomGetMethods::getContentPrepareCode
  Generate content preparation code for specified textarea fields.

  since: 5.1.2
  return: string
  
  arguments:
    array $get
    string $code
    ?array $checker
end note

note right of CustomGetMethods::getUIKitCode
  Generate UIkit-specific field formatting code.

  since: 5.1.2
  return: string
  
  arguments:
    array $get
    string $code
    ?array $checker
end note

note left of CustomGetMethods::getJoinCode
  Generate and update placeholder code for joined field strings.

  since: 5.1.2
  return: string
end note

note right of CustomGetMethods::hasFieldProcessing
  Check if any of the provided code parts contain executable logic.

  since: 5.1.2
  return: bool
end note

note left of CustomGetMethods::buildFieldProcessingBlock
  Build the complete foreach loop block to process all returned items.

  since: 5.1.2
  return: string
  
  arguments:
    string $decoder
    string $decoderFilter
    string $contentPrepare
    string $uikit
    string $joinCode
end note

note right of CustomGetMethods::injectCryptionScript
  Inject cryption script into methods.

  since: 5.1.2
  return: string
  
  arguments:
    string $methods
    array $default
    string $code
end note

note left of CustomGetMethods::injectDispatcherIfNeeded
  Inject dispatcher code if needed.

  since: 5.1.2
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
Super---fdd92193_584d_4273_a3d8_cfe1621213c7---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")